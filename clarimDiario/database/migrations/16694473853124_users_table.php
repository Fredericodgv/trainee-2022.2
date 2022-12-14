<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class userstable
{

    public static function up()
    {
        Capsule::schema()->create("users", function (Blueprint $table) {
            $table->increments("id");
            $table->string("Nome");
            $table->string("Email")->unique();
            $table->string("Senha");
            $table->timestamps();
        });
    }

    public static function down() {
        Capsule::schema()->drop("users");
    }

}