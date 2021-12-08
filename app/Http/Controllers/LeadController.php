<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Notifications\LeadReady;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Jenssegers\Agent\Agent;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = new Agent();

        $isPhone = $agent->isPhone();

        return view('lead.lead', [
            'isPhone' => $isPhone,
        ]);
    }

    /**
     * Liberar e-book para novo lead
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function liberarEbook(Request $request)
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

                return response()->json(['status' => 'success']);
            } else {
                return response()->json(['status' => 'warning', 'mensagem' => 'e-mail existente.']);
            }

        } catch (Exception $e) {
            DB::rollback();

            Notification::route('telegram_user_id', env('TELEGRAM_CHANNEL_LEADS_ID'))
                ->route('message', 'Erro ao salvar lead nome: ' . $data['nome'] . ', e-mail: ' . $email . ', telefone: ' . $data['telefone'] . '. Detalhes: ' . $e->getMessage())
                ->notify(new LeadReady());

            Log::error('Erro ao salvar lead nome: ' . $data['nome'] . ', e-mail: ' . $email . ', telefone: ' . $data['telefone'] . '. Detalhes: ' . $e->getMessage());

            return response()->json(['error', 'detalhes' => $e->getMessage()], 500);
        }
    }

    /**
     * Liberar e-book para e-mail já informado anteriormente
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function liberarEbookNovamente(Request $request)
    {
        $data  = $request->all();
        $email = mb_strtolower($data['email']);

        DB::beginTransaction();
        try {
            $lead = Lead::where('email', $email)->get()->first();

            $lead->nome       = $data['nome'];
            $lead->email      = $email;
            $lead->telefone   = $data['telefone'];
            $lead->updated_at = Carbon::now();
            $lead->save();

            DB::commit();

            /* Envia dados do lead para canal privado */
            Notification::route('telegram_user_id', env('TELEGRAM_CHANNEL_LEADS_ID'))
                ->route('message', 'Lead nome: ' . $data['nome'] . ', e-mail: ' . $email . ', telefone: ' . $data['telefone'])
                ->notify(new LeadReady());

            Log::debug('Arquivo PDF entregue ao lead: ' . $data['nome'] . ', e-mail: ' . $email . ', telefone: ' . $data['telefone']);

            return response()->json(['status' => 'success']);

        } catch (Exception $e) {
            DB::rollback();

            Notification::route('telegram_user_id', env('TELEGRAM_CHANNEL_LEADS_ID', '0'))
                ->route('message', 'Erro ao salvar lead nome: ' . $data['nome'] . ', e-mail: ' . $email . ', telefone: ' . $data['telefone'] . '. Detalhes: ' . $e->getMessage())
                ->notify(new LeadReady());

            Log::error('Erro ao salvar lead nome: ' . $data['nome'] . ', e-mail: ' . $email . ', telefone: ' . $data['telefone'] . '. Detalhes: ' . $e->getMessage());

            return response()->json(['error', 'detalhes' => $e->getMessage()], 500);
        }
    }
}
