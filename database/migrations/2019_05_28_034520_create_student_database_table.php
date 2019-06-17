<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentDatabaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_first_name');
            $table->string('student_last_name');
            $table->string('student_nick_name');
            $table->string('gender');
            $table->string('student_place_of_birth');
            $table->string('student_day_birth');
            $table->string('student_month_birth');
            $table->string('student_year_birth');
            $table->string('student_phone');
            $table->string('student_email');
            $table->string('student_religion');
            $table->string('student_nasionality');
            $table->string('student_address');
            $table->string('student_country');
            $table->string('student_state');
            $table->string('student_zip');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('student_database');
    }
}
