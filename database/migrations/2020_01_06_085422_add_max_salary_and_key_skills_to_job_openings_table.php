<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaxSalaryAndKeySkillsToJobOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_openings', function (Blueprint $table) {
            $table->string('max_salary')->after('min_salary')->nullable();
            $table->string('key_skills')->after('minimum_experience')->nullable();
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
            $table->dropColumn('max_salary');
            $table->dropColumn('key_skills');
        });
    }
}
