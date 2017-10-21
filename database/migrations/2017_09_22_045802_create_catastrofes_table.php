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
            $table->timestamp('fecha_incorporacion');
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('catastrofes');
    }
}
