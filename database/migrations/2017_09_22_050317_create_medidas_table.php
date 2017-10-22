<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('admin_id')->nullable();
            $table->integer('organization_id');
            $table->integer('catastrofe_id');
            $table->integer('tipo_medida');
            $table->string('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
<<<<<<< HEAD
            $table->timestamp('fecha_creacion');
            $table->integer('estado')->default(0);
            $table->integer('avance')->default(0);
            $table->morphs('MorphMedida'); 
=======
            $table->integer('estado')->default(0);
            $table->integer('avance')->default(0);
            $table->morphs('MorphMedida'); 
            $table->timestamps();
>>>>>>> 07e9222251e562379181d127d05098bac64c12e0
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('admin_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('catastrofe_id')
                ->references('id')
                ->on('catastrofes')
                ->onDelete('cascade');

            $table->foreign('organization_id')
                ->references('id')
                ->on('organizations')
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
        Schema::dropIfExists('medidas');
    }
}
