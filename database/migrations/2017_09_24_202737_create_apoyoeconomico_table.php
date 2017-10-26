<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApoyoeconomicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoyo_economicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('metaMinima');
            $table->integer('actual')->default(0);
            $table->integer('numCuenta');
            $table->string('TipoCuenta');
            $table->string('bancoCuenta');
            $table->string('titularCuenta');
            $table->string('correoCuenta');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('apoyo_economicos');
    }
}
