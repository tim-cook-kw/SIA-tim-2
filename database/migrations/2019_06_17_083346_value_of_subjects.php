<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ValueOfSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('value_of_subjects', function (Blueprint $table) {
            $table->increments('id_value_of_subjects');
            $table->integer('subject')->unsigned();
            $table->integer('teacher')->unsigned();
            $table->integer('schedule_of_subjects')->unsigned();
            $table->string('value');
            $table->timestamps();
            $table->foreign('subject')->references('id_subject')->on('subject');
            $table->foreign('teacher')->references('id_teacher')->on('teacher');
            $table->foreign('schedule_of_subjects')->references('id_schedule')->on('schedule_of_subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('value_of_subjects');
    }
}
