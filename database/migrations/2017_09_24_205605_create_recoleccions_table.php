<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecoleccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recoleccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('region');
            $table->integer('comuna_id');
            $table->string('direccion');
            $table->timestamps();

            $table->foreign('comuna_id')
                ->references('id')
                ->on('comunas')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recoleccions');
    }
}
