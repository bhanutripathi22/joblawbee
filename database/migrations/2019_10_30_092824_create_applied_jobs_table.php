<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('job_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('bdate');
            $table->string('expert_level');
            $table->string('job_title_and_company')->nullable();
            $table->string('current_location')->nullable();
            $table->string('current_salary');
            $table->string('notice_period')->nullable();
            $table->string('total_experience')->nullable();
            $table->string('resume');
            $table->timestamps();

            $table->foreign('job_id')->references('id')->on('job_openings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applied_jobs');
    }
}
