<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScheduleOfSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_of_subjects', function (Blueprint $table) {
            $table->increments('id_schedule');
            $table->integer('subject')->unsigned();
            $table->integer('teacher')->unsigned();
            $table->string('day');
            $table->timestamps();
            $table->foreign('subject')->references('id_subject')->on('subject');
            $table->foreign('teacher')->references('id_teacher')->on('teacher');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_of_subjects');
    }
}
