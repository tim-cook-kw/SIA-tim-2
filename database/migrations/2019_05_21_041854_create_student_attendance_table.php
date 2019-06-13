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
            // $table->integer('id_student')->unsigned();
            $table->string('student', 50);
            $table->date('date');
            $table->string('status', 20);
            $table->timestamps();
        });

        DB::unprepared(
        'DROP PROCEDURE IF EXISTS SelectAllAttendance; CREATE PROCEDURE SelectAllAttendance() BEGIN SELECT * FROM student_attendance; END;'
        );
        DB::unprepared(
        'DROP PROCEDURE IF EXISTS SelectAllAttWhereStudentName;  CREATE PROCEDURE SelectAllAttWhereStudentName(IN studentname VARCHAR(50)) BEGIN SELECT * FROM student_attendance WHERE student = studentname; END;'
        );
        DB::unprepared(
            'DROP PROCEDURE IF EXISTS InsertAttendance;  CREATE PROCEDURE InsertAttendance(IN sName VARCHAR(50), IN sDate DATE, IN sStatus VARCHAR(20)) BEGIN INSERT INTO student_attendance (student, date, status) VALUES (sName, sDate, sStatus); END;'
        );

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
