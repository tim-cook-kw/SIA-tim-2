<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreProsedureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        DB::unprepared('DROP PROCEDURE IF EXISTS DeleteAttendance; CREATE PROCEDURE allStudents() BEGIN SELECT * FROM students; END');
=======
        DB::unprepared('CREATE PROCEDURE allStudents() BEGIN SELECT * FROM students; END');
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
