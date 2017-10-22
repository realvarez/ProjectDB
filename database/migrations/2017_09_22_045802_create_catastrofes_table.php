<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatastrofesTable extends Migration
{
    public function up()
    {
        Schema::create('catastrofes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('comuna_id');
            $table->string('descripcion');
            $table->integer('tipo_catastrofe');
<<<<<<< HEAD
            $table->timestamp('fecha_incorporacion');
=======
            $table->timestamps();
>>>>>>> 07e9222251e562379181d127d05098bac64c12e0
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
<<<<<<< HEAD
=======

            $table->foreign('comuna_id')
                ->references('id')
                ->on('comunas')
                ->onDelete('cascade');
>>>>>>> 07e9222251e562379181d127d05098bac64c12e0
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catastrofes');
    }
}
