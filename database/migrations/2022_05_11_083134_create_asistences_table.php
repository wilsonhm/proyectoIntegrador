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
        Schema::create('asistences', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->string('date');
            $table->enum('state',[ 1, 2,3]);
            $table->unsignedBigInteger('partner_id');
            $table->unsignedBigInteger('activity_id');
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');

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
        Schema::dropIfExists('asistences');
    }
};
