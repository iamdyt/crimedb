<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_files', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('case_reference');
            $table->enum('status', ['Pending', 'Processing','In-Court','Closed','Completed'])->default('Pending');
            $table->text('description');
            $table->unsignedBigInteger('complainant_id');
            $table->unsignedBigInteger('victim_id');
            $table->unsignedBigInteger('accused_id');
            $table->unsignedBigInteger('officer_in_charge');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('station_id');

            $table->foreign('complainant_id')->references('id')->on('complainants');
            $table->foreign('victim_id')->references('id')->on('victims');
            $table->foreign('accused_id')->references('id')->on('accuseds');
            $table->foreign('officer_in_charge')->references('id')->on('officers');
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
        Schema::dropIfExists('case_files');
    }
}
