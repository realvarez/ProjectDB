<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('tipo_cambio');
            $table->string('tabla');
            $table->string('estado_antiguo');
            $table->string('estado_nuevo');
<<<<<<< HEAD
            $table->timestamp('fecha_accion');
=======
            $table->timestamps();
>>>>>>> 07e9222251e562379181d127d05098bac64c12e0

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
<<<<<<< HEAD
=======

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
        Schema::dropIfExists('historias');
    }
}
