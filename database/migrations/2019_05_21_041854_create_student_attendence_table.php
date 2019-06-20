<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAttendenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_attendence', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('id_student')->unsigned();
            $table->string('student', 50);
            $table->date('date');
            $table->string('status', 20);
            $table->timestamps();
        });
        DB::unprepared(
            'DROP PROCEDURE IF EXISTS DelAttendance;  CREATE PROCEDURE DelAttendance(IN sId INT) BEGIN DELETE FROM student_attendence WHERE id = sId ; END;'
        );

        DB::unprepared(
        'DROP PROCEDURE IF EXISTS SelectAllAttendance; CREATE PROCEDURE SelectAllAttendance() BEGIN SELECT * FROM student_attendence; END;'
        );
        DB::unprepared(
            'DROP PROCEDURE IF EXISTS SelectAttendanceWhereId; CREATE PROCEDURE SelectAttendanceWhereId(IN Id INT) BEGIN SELECT * FROM student_attendence WHERE id = Id; END;'
            );
        DB::unprepared(
        'DROP PROCEDURE IF EXISTS SelectAllAttWhereStudentName;  CREATE PROCEDURE SelectAllAttWhereStudentName(IN studentname VARCHAR(50)) BEGIN SELECT * FROM student_attendence WHERE student = studentname; END;'
        );
        DB::unprepared(
            'DROP PROCEDURE IF EXISTS InsertAttendance;  CREATE PROCEDURE InsertAttendance(IN sName VARCHAR(50), IN sDate DATE, IN sStatus VARCHAR(20)) BEGIN INSERT INTO student_attendence (student, date, status) VALUES (sName, sDate, sStatus); END;'
        );
        DB::unprepared(
            'DROP PROCEDURE IF EXISTS UpdateAttendance;  CREATE PROCEDURE UpdateAttendance(IN sId INT, IN sName VARCHAR(50), IN sDate DATE, IN sStatus VARCHAR(20)) BEGIN UPDATE student_attendence SET student = sName, date = sDate, status = sStatus WHERE id = sId ; END;'
        );



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_attendence');
    }
}
