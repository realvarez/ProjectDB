<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariadoTable extends Migration
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
            $table->integer('voluntariosActuales');
            $table->integer('duracionDias');
            $table->string('region');
            $table->string('comuna');
            $table->string('direccion');
<<<<<<< HEAD
=======
            $table->timestamps();
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
        Schema::dropIfExists('voluntariados');
    }
}
