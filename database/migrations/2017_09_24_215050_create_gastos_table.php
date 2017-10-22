<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medida_id');
            $table->string('descripcion');
            $table->timestamps();
            
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
        Schema::dropIfExists('gastos');
    }
}
