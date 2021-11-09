<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::getPostsActives();

        return view('post.index', [
            'titlePageNavigator' => "Postagens",
            'posts'              => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create', [
            'titlePageNavigator' => "Nova Postagem",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        DB::beginTransaction();
        try {
            $lastId = Post::getLastId() + 1;

            /* Nova postagem */
            Post::create([
                'author_id' => auth()->user()->id,
                "title"     => $data['title'],
                'body'      => $data['body'],
                "slug"      => $data['slug'],
                'active'    => true,
            ]);

            DB::commit();
            Log::info('Nova postagem salva com sucesso.');
            return response('Postagem salva com sucesso');
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Erro ao criar nova postagem. Detalhes: ' . $e->getMessage());
            return response('Erro ao criar nova postagem. Detalhes: ' . $e->getMessage(), 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit', [
            'titlePageNavigator' => "Editar Postagem",
            'post'               => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->all();

        DB::beginTransaction();
        try {
            /* Atualizando postagem */
            $post = Post::find($id);

            $post->title = $dados['title'];
            $post->body  = $dados['body'];
            $post->slug  = $dados['slug'];

            $post->save();

            DB::commit();
            Log::info('Postagem atualizada com sucesso.');
            return response('Postagem atualizada com sucesso');
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Erro ao atualizar postagem. Detalhes: ' . $e->getMessage());
            return response('Erro ao atualizar postagem. Detalhes: ' . $e->getMessage(), 500);
        }
    }

    public function view($slug)
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function desativarPostagem(Request $request)
    {
        $data = $request->all();

        DB::beginTransaction();
        try {
            /* Desativando postagem */
            $post         = Post::find($data['id']);
            $post->active = false;

            $post->save();

            DB::commit();
            Log::info('Postagem desativada com sucesso.');
            return response('Postagem desativada com sucesso');
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Erro ao desativar postagem. Detalhes: ' . $e->getMessage());
            return response('Erro ao desativada postagem. Detalhes: ' . $e->getMessage(), 500);
        }
    }

    public function upload(Request $request)
    {
        try {
            $fileName = $request->file('file')->getClientOriginalName();
            $path     = $request->file('file')->storePubliclyAs('public/imagens', $fileName);
            return response()->json(['location' => public_path($path)]);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json($th->getMessage());
        }
    }
}
