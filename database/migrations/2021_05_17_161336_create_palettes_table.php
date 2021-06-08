<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalettesTable extends Migration
{

    public function up()
    {
        Schema::create('palettes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('color_id');
            $table->integer('size');
            $table->boolean('favourite');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('palettes');
    }
}
