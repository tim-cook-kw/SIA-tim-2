<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teacher_first_name');
            $table->string('teacher_last_name');
            $table->string('teacher_nick_name');
            $table->string('gender');
            $table->string('teacher_place_of_birth');
            $table->string('teacher_day_birth');
            $table->string('teacher_month_birth');
            $table->string('teacher_year_birth');
            $table->string('teacher_phone');
            $table->string('teacher_email');
            $table->string('teacher_religion');
            $table->string('teacher_nasionality');
            $table->string('teacher_address');
            $table->string('teacher_country');
            $table->string('teacher_state');
            $table->string('teacher_zip');
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
        Schema::dropIfExists('Teachers');
    }
}
