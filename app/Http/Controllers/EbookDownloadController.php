<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Notifications\LeadReady;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class EbookDownloadController extends Controller
{
    /**
     * Fazer Download
     *
     * @param  string  $email
     */
    public function fazerDownload($email)
    {
        try
        {
            $fiveMinutes = Carbon::now()->subMinutes(120);
            $now         = Carbon::now();

            $lead = Lead::where('email', mb_strtolower($email))->whereBetween('updated_at', [$fiveMinutes, $now])->get();

            if (count($lead) > 0) {
                $pathDownload = public_path('downloads/ebook_emili_19483924.pdf');

                Log::debug('Arquivo PDF entregue ao lead: ' . $email);

                Notification::route('telegram_user_id', env('TELEGRAM_CHANNEL_ID', '0'))
                    ->route('message', 'Arquivo PDF entregue ao lead: ' . $email)
                    ->notify(new LeadReady());

                $headers = array(
                    'Content-Type: application/pdf',
                );

                return response()->download($pathDownload, 'ebook_caderno_receitas_emili_ananias.pdf', $headers);
            } else {
                return view('lead.lead-time-expired');
            }
        } catch (Exception $e) {
            Notification::route('telegram_user_id', env('TELEGRAM_CHANNEL_ID', '0'))
                ->route('message', 'Erro ao fazer download de e-book. E-mail: ' . $email . '. Detalhes técnicos: ' . $e->getMessage())
                ->notify(new LeadReady());

            Log::error('Erro ao fazer download de e-book. E-mail: ' . mb_strtolower($email) . '. Detalhes técnicos: ' . $e->getMessage());
        }

    }
}
