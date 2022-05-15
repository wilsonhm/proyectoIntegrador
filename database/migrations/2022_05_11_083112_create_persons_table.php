<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->string('nombre');
            $table->string('ape_paterno');
            $table->string('ape_materno');
            $table->string('dni');
            $table->string('fe_nacimiento');
            $table->enum('es_civil', [ 1, 2, 3, 4]);
            $table->enum('sexo',[ 1, 2,3]);
            $table->string('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->string('es_persona');
            $table->string('fa_parentesco')->nullable("-");
            $table->string('parentesco')->nullable("-");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
};
