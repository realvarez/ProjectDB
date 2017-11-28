<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAportesUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aportes_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->nuelleable();
            $table->integer('id_aporte');
            $table->integer('cantidad');
            $table->string('email')->nuelleable();
            $table->timestamps();
        });

        $table->foreign('id_usuario')
        ->references('id')
        ->on('users')
        ->onDelete('cascade');

        $table->foreign('id_aporte')
        ->references('id')
        ->on('aportes')
        ->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aportes_usuarios');
    }
}
