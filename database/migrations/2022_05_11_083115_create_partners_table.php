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
        Schema::create('partners', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->string('codigo');
            $table->string('tipo');
            $table->string('categoria');
            $table->string('imagen');

            $table->unsignedBigInteger('stand_id');


            $table->foreign('stand_id')->references('id')->on('stands')->onDelete('cascade');
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
        Schema::dropIfExists('partners');
    }
};
