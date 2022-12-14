<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class poststable
{
    public static function up()
    {
        Capsule::schema()->create("posts", function (Blueprint $table) {
            $table->increments("id");
            $table->string("titulo");
            $table->string("conteudo");
            $table->string("imagem");
            $table->date("data_publicacao")->nullable();
            $table->string("autor");
            $table->timestamps();
        });
    }

    public static function down() {
        Capsule::schema()->drop("posts");
    }
}