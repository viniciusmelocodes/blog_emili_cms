<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'title',
        'body',
        'slug',
        'active',
    ];

    /**
     * Regras para postagens
     *
     * @param array $data = array passado via POST
     * @return boolean
     */
    protected static function validator($data)
    {
        return Validator::make($data, [
            'title' => 'required|min:5|max:191',
            'body'  => 'required|min:5',
            'slug'  => 'required|min:5|max:191|unique',
        ]);
    }

    protected static function getPosts()
    {
        return Post::select('id', 'title', 'body', 'slug', 'active', 'created_at', 'updated_at')->where('author_id', auth()->user()->id)->where('active', true)->get();
    }

    protected static function getCountPosts()
    {
        return Post::where('author_id', auth()->user()->id)->where('active', true)->count();
    }

    /**
     * Busca o id da ultima atualização lançada
     *
     * @return object
     */
    protected static function getLastId()
    {
        return Post::orderBy('id', 'DESC')->first()->id ?? 0;
    }
}
