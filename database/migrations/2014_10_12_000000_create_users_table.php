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

            $table->integer('comuna_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('rut');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('direccion');
            $table->integer('rol_id')->default(1);
            $table->integer('estado')->default(1);
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
