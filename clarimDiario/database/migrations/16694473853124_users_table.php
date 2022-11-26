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
            $table->string("name");
            $table->string("email")->unique();
            $table->string("password");
            $table->enum("gender", ["M", "F", "NB"])->nullable();
            $table->date("birth_date")->nullable();
            $table->timestamps();
        });
    }

    public static function down() {
        Capsule::schema()->drop("users");
    }

}