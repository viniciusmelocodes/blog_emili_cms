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
        $posts = Post::getPosts();

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
        $data      = $request->all();
        dd($data);
        $validator = Post::validator($data);

        if ($validator->fails()) {
            session()->flash('flash_warning', config('constants.error.constMsgCampsField'));
            return redirect()->route('post-create')->withErrors($validator)->withInput();
        } else if (!isset($data['fileupload'])) {
            session()->flash('flash_warning', config('constants.error.constMsgCampsField'));
            return redirect()->route('post-create')->withErrors(['fileupload' => 'error'])->withInput();
        }

        DB::beginTransaction();
        try {
            $lastId = Post::getLastId() + 1;

            /*Gravando dados do post*/
            Post::create([
                "title"     => $data['title'],
                'body'      => $data['body'],
                "slug"      => $data['slug'],
                'active'    => true,
                'author_id' => auth()->user()->id,
            ]);

            DB::commit();
            session()->flash('flash_success', config('constants.success.constMsgSave'));
            return redirect()->route('post-index');
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Erro ao criar nova postagem. Detalhes: ' . $e->getMessage());
            session()->flash('flash_error', config('constants.error.constMsgErrorSave'));
            return redirect()->route('post-create')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
