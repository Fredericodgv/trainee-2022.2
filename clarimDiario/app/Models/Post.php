<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post Extends Model
{

    protected $fillable = [
        'title',
        'content',
        'image',
        'created_at',
        'author'
    ];

}