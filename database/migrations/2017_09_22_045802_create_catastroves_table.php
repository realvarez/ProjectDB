<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatastrovesTable extends Migration
{
    public function up()
    {
        Schema::create('catastroves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('comuna_id');
            $table->string('descripcion');
            $table->string('titulo');
            $table->integer('tipo_catastrofe');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('comuna_id')
                ->references('id')
                ->on('comunas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catastroves');
    }
}
