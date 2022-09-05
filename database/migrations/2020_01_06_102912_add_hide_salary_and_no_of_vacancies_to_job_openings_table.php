<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHideSalaryAndNoOfVacanciesToJobOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_openings', function (Blueprint $table) {
            $table->tinyInteger('hide_salary')->after('max_salary')->default(0);
            $table->integer('no_of_vacancies')->after('key_skills')->default(0);
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
            $table->dropColumn('hide_salary');
            $table->dropColumn('no_of_vacancies');
        });
    }
}
