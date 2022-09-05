<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUnwantedColumnsFromJobOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_openings', function (Blueprint $table) {
            $table->dropColumn(['minimum_qualification', 'timings' , 'working_days', 'required_candidate', 'hiring_process', 'number_of_vacancy' ,'last_date_to_apply']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_openings', function (Blueprint $table) {
            $table->string('minimum_qualification')->after('salary');
            $table->string('timings')->after('description');
            $table->string('working_days')->after('timings');
            $table->string('required_candidate')->after('working_days');
            $table->string('hiring_process')->after('required_candidate');
            $table->string('number_of_vacancy')->after('hiring_process');
            $table->date('last_date_to_apply')->after('number_of_vacancy');
        });
    }
}
