<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Notifications\LeadReady;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Jenssegers\Agent\Agent;

class OperacaoCakesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = new Agent();

        $isMobile = $agent->isMobile();

        return view('operacaocakes', [
            'titlePageNavigator' => 'Operação Cakes',
            'isMobile'           => $isMobile,
        ]);
    }

    /**
     * Liberar e-book para novo lead
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function garantirVaga(Request $request)
    {
        $data  = $request->all();
        $email = mb_strtolower($data['email']);

        DB::beginTransaction();
        try {
            $lead = Lead::where('email', $email)->get();
            /* Criando lead */
            if (count($lead) == 0) {
                $lead             = new Lead();
                $lead->nome       = $data['nome'];
                $lead->email      = $email;
                $lead->telefone   = $data['telefone'];
                $lead->created_at = Carbon::now();
                $lead->updated_at = Carbon::now();
                $lead->save();

                DB::commit();

                /* Envia dados do lead para canal privado */
                Notification::route('telegram_user_id', env('TELEGRAM_CHANNEL_LEADS_ID'))
                    ->route('message', 'Lead nome: ' . $data['nome'] . ', e-mail: ' . $email . ', telefone: ' . $data['telefone'])
                    ->notify(new LeadReady());

                Log::debug('Arquivo PDF entregue ao lead: ' . $data['nome'] . ', e-mail: ' . $email . ', telefone: ' . $data['telefone']);

                try {
                    /* */
                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                        CURLOPT_URL            => 'https://mktlancamentosdigitais.activehosted.com/proc.php?u=7&f=7&s=&c=0&m=0&act=sub&v=2&or=a896357d55f8c9f37298a9341962bb9a&fullname=' . $data['nome'] . '&email=' . $email . '&phone=' . $data['telefone'] . '&field%5B10%5D=&field%5B12%5D=&field%5B11%5D=&field%5B13%5D=&field%5B14%5D=',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING       => '',
                        CURLOPT_MAXREDIRS      => 10,
                        CURLOPT_TIMEOUT        => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST  => 'POST',
                        CURLOPT_HTTPHEADER     => array(
                            'Cookie: PHPSESSID=c25a95edd1bba4a4f4c4f4eeb195b01e; cmp611697366=df61188629de7b3446520dbfe0524a8b',
                        ),
                    ));

                    curl_exec($curl);
                    curl_close($curl);

                } catch (\Throwable $th) {
                    Notification::route('telegram_user_id', env('TELEGRAM_CHANNEL_LEADS_ID'))
                        ->route('message', 'Erro ao enviar dados para Active Campaign. Detalhes: ' . $th->getMessage())
                        ->notify(new LeadReady());

                    Log::error('Erro ao enviar dados para Active Campaign. Detalhes: ' . $th->getMessage());
                }

                return response()->json(['status' => 'success']);
            } else {
                return response()->json(['status' => 'warning', 'mensagem' => 'e-mail existente.']);
            }

        } catch (\Throwable $th) {
            DB::rollback();

            Notification::route('telegram_user_id', env('TELEGRAM_CHANNEL_LEADS_ID'))
                ->route('message', 'Erro ao salvar lead nome: ' . $data['nome'] . ', e-mail: ' . $email . ', telefone: ' . $data['telefone'] . '. Detalhes: ' . $th->getMessage())
                ->notify(new LeadReady());

            Log::error('Erro ao salvar lead nome: ' . $data['nome'] . ', e-mail: ' . $email . ', telefone: ' . $data['telefone'] . '. Detalhes: ' . $th->getMessage());

            return response()->json(['error', 'detalhes' => $th->getMessage()], 500);
        }
    }
}
