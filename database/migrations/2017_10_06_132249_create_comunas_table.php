<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('region_id');
            $table->string('nombre');
            $table->timestamps();

            $table->foreign('region_id')
                ->references('id')
                ->on('region')
                ->onDelete('cascade');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('comuna_id')
                ->references('id')
                ->on('comuna')
                ->onDelete('cascade');
        });

        Schema::table('catastrofes', function (Blueprint $table) {
            $table->foreign('comuna_id')
                ->references('id')
                ->on('comuna')
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
        Schema::dropIfExists('comunas');
    }
}
