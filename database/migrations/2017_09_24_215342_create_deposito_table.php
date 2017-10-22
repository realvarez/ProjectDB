<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depositos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('medida_id');
            $table->integer('rut');
            $table->integer('cantidad');
            $table->date('fechaDeposito');
            $table->string('documento');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('medida_id')
                ->references('id')
<<<<<<< HEAD
                ->on('apoyos')
=======
                ->on('apoyo_economicos')
>>>>>>> 07e9222251e562379181d127d05098bac64c12e0
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
        Schema::dropIfExists('depositos');
    }
}
