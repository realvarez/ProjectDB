<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntariados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('metaVoluntarios');
            $table->integer('voluntariosActuales')->default(0);
            $table->integer('duracionDias');
            $table->integer('comuna_id');
            $table->string('direccion');
            $table->timestamps();

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
        Schema::dropIfExists('voluntariados');
    }
}
