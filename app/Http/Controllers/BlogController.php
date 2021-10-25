<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Notifications\EncomendaEmili;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class BlogController extends Controller
{
    /**
     * Página principal
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postagens = Post::select('*')->where('active', true)->orderBy('updated_at', 'DESC')->get();

        return view('blog.inicio.inicio', [
            'titlePageNavigator' => 'Início | ' . env('APP_NAME'),
            'postagens'          => $postagens,
        ]);
    }

    /**
     * Get Postagem
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getPostagem($slug)
    {
        $postagem = Post::select('*')->where([['slug', $slug], ['active', true]])->get()->first();

        if (!isset($postagem)) {
            abort(404);
        }

        return view('blog.postagem.postagem', [
            'titlePageNavigator' => $postagem->title . ' | ' . env('APP_NAME'),
            'postagem'           => $postagem,
        ]);
    }

    /**
     * Get Postagem
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function sendEncomendaEmili(Request $request)
    {
        $data = $request->all();

        $mensagem = 'Nova encomenda => Cliente: ' . $data['nome'] .
            ', E-mail: ' . $data['email'] .
            ', Nº WhatsApp: ' . $data['telefone'] .
            ', Forma de pagamento: ' . $data['formaPagamento'] .
            ', Pedido: ' . $data['pedido'];

        Notification::route('telegram_user_id', env('TELEGRAM_CHANNEL_ENCOMENDAS_ID'))
            ->route('message', $mensagem)
            ->notify(new EncomendaEmili());

        return response()->json('Pedido de encomenda enviado com sucesso.');
    }
}
