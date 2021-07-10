<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccusedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accuseds', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->string('phone');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('email');
            $table->enum('status',['Invited','Arrested','Bailed','Jailed','Freed'])->default('Invited');
            $table->text('address');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('state_id');

            $table->unsignedBigInteger('station_id');

            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('station_id')->references('id')->on('stations');
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
        Schema::dropIfExists('accuseds');
    }
}
