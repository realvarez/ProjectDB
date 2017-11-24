<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aportes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recoleccion_id');
            $table->string('nombre');
            $table->integer('requeridos');
            $table->integer('recolectado');
            $table->timestamps();

            $table->foreign('recoleccion_id')
            ->references('id')
            ->on('recoleccions')
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
        Schema::dropIfExists('aportes');
    }
}
