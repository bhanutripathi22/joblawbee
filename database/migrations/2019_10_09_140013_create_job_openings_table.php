<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_openings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id');
            $table->string('title');
            $table->string('location');
            $table->string('salary');
            $table->string('minimum_qualification');
            $table->string('minimum_experience');
            $table->text('description');
            $table->string('timings')->nullable();
            $table->string('working_days')->nullable();
            $table->string('required_candidate')->nullable();
            $table->string('hiring_process')->nullable();
            $table->string('number_of_vacancy')->nullable();
            $table->date('last_date_to_apply')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_openings');
    }
}
