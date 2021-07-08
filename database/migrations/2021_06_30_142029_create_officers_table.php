<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('references');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('rank_id');
            $table->unsignedBigInteger('station_id');
            $table->unsignedBigInteger('state_of_origin_id');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('rank_id')->references('id')->on('ranks');
            $table->foreign('station_id')->references('id')->on('stations');
            $table->foreign('state_of_origin_id')->references('id')->on('states');
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
        Schema::dropIfExists('officers');
    }
}
