<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('rol_id')->default(1);
            $table->integer('comuna_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('rut');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('direccion');
            $table->integer('estado')->default(1);
<<<<<<< HEAD

            $table->rememberToken();
            $table->timestamps();
=======
            $table->rememberToken();
            $table->timestamps();

            
            $table->foreign('comuna_id')
                ->references('id')
                ->on('comunas')
                ->onDelete('cascade');
                
            $table->foreign('rol_id')
                ->references('id')
                ->on('rols')
                ->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
