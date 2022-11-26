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
            $table->integer("author");
            $table->timestamps();
        });
    }

    public static function down() {
        Capsule::schema()->drop("posts");
    }
}