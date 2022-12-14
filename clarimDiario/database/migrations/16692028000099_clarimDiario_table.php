<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class clarimDiariotable
{
    public static function up()
    {
        Capsule::schema()->create("clarimDiario", function (Blueprint $table) {
            $table->increments("id");
            $table->timestamps();
        });
    }

    public static function down() {
        Capsule::schema()->drop("clarimDiario");
    }
}