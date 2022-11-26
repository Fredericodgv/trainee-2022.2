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
            $table->string("title");
            $table->text("content");
            $table->string("image");
            $table->date("created_at");
            $table->unsignedBigInteger("author");
            $table->foreign("autor")->references("id")->on("users");
        });
    }

    public static function down() {
        Capsule::schema()->drop("posts");
    }
}