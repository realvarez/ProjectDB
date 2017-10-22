<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('logo');
            $table->string('descripcion');
<<<<<<< HEAD
            $table->timestamp('fechaCreacion');
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
        Schema::dropIfExists('organizations');
    }
}
