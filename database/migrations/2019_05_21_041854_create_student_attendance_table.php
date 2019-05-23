<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_attendance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_student')->unsigned();
            $table->string('course', 20);
            $table->date('date');
            $table->time('time_start');
            $table->time('time_finish');
            $table->string('status', 20);
            $table->string('teacher_name', 50);
            $table->boolean('attendance_block')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_attendance');
    }
}
