<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecoleccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recolecciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('metaRecoleccion');
            $table->integer('recoleccionActual')->default(0);
            $table->string('region');
            $table->integer('comuna_id');
            $table->string('direccion');
            $table->integer('tipoRecoleccion');
            $table->timestamps();

            $table->foreign('comuna_id')
                ->references('id')
                ->on('comunas')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recolecciones');
    }
}
