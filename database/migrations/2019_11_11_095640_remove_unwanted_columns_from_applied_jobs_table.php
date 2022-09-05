<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUnwantedColumnsFromAppliedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applied_jobs', function (Blueprint $table) {
            $table->dropColumn(['bdate', 'expert_level' , 'job_title_and_company', 'current_location', 'notice_period', 'total_experience']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applied_jobs', function (Blueprint $table) {
            $table->string('bdate')->after('last_name');
            $table->string('expert_level')->after('bdate');
            $table->string('job_title_and_company')->after('expert_level');
            $table->string('current_location')->after('job_title_and_company');
            $table->string('notice_period')->after('current_salary');
            $table->string('total_experience')->after('notice_period');
        });
    }
}
