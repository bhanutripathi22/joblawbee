<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticeAreaChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_area_children', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('practice_area_id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('practice_area_id')->references('id')->on('practice_areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practice_area_children');
    }
}
