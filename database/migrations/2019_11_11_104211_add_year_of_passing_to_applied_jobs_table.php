<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddYearOfPassingToAppliedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applied_jobs', function (Blueprint $table) {
            $table->string('year_of_passing')->after('law_college');
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
            $table->dropColumn('year_of_passing');
        });
    }
}
