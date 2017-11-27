<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('medida_id');
            $table->string('comentario');
            $table->timestamps();

            $table->foreign('medida_id')
                ->references('id')
                ->on('medidas')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
