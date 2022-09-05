<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameSalaryToMinSalaryInJobOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_openings', function (Blueprint $table) {
            $table->renameColumn('salary', 'min_salary');
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
            $table->renameColumn('min_salary', 'salary');
        });
    }
}
