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

    protected static function getPostsActives()
    {
        return Post::select('id', 'title', 'body', 'slug', 'active', 'created_at', 'updated_at')->where('author_id', auth()->user()->id)->where('active', true)->get();
    }

    protected static function getCountPostsActives()
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
