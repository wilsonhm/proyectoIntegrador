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
        Schema::create('activities', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('controltab_id');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');

            $table->foreign('controltab_id')->references('id')->on('control_tabs')->onDelete('cascade');
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
        Schema::dropIfExists('activities');
    }
};
