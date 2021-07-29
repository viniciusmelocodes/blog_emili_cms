<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'conteudo',
        'user_id'
    ];

    /**
     * Busca os posts e ordena-os por ordem crescente
     *
     * @return array (retorna um array de objetos)
     */
    protected static function getPosts()
    {
        return Post::select('id', 'titulo', 'created_at')->orderBy('updated_at', 'DESC')->get();
    }
}
