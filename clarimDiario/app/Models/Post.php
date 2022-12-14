<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post Extends Model
{

    protected $fillable = [
        'titulo',
        'conteudo',
        'imagem',
        'data_publicacao',
        'autor'
    ];

}