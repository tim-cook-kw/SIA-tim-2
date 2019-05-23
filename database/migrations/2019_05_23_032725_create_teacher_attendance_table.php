<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_attendance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_teacher')->unsigned();
            $table->string('course', 20);
            $table->date('date');
            $table->time('time_start');
            $table->time('time_finish');
            $table->string('status', 20);
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
        Schema::dropIfExists('teacher_attendance');
    }
}
