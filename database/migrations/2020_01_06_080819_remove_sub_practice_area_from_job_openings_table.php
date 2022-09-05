<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveSubPracticeAreaFromJobOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_openings', function (Blueprint $table) {
            $table->dropColumn('sub_practice_area');
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
            $table->string('sub_practice_area')->after('practice_area');
        });
    }
}
