<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teachers;

class AddTeacherController extends Controller
{
    public function addTeacherForm() {
        return view('admin.add-teacher');
    }

    public function addTeacher(Request $request) {
        $addTeacher = new Teachers();
 
        $addTeacher->teacher_first_name = request('teacher_first_name');
        $addTeacher->teacher_last_name = request('teacher_last_name');
        $addTeacher->teacher_nick_name = request('teacher_nick_name');
        $addTeacher->gender = request('gender');
        $addTeacher->teacher_place_of_birth = request('teacher_place_of_birth');
        $addTeacher->teacher_day_birth = request('teacher_day_birth');
        $addTeacher->teacher_month_birth = request('teacher_month_birth');
        $addTeacher->teacher_year_birth = request('teacher_year_birth');
        $addTeacher->teacher_phone = request('teacher_phone');
        $addTeacher->teacher_email = request('teacher_email');
        $addTeacher->teacher_religion = request('teacher_religion');
        $addTeacher->teacher_nasionality = request('teacher_nasionality');
        $addTeacher->teacher_address = request('teacher_address');
        $addTeacher->teacher_country = request('teacher_country');
        $addTeacher->teacher_state = request('teacher_state');
        $addTeacher->teacher_zip = request('teacher_zip');
 
        $addTeacher->save();
 
        return redirect('/admin/showTeacher');
     }

    public function showTeacher(){
 
        $addTeacher = Teachers::all();
 
        return view('admin.all-teacher', ['addTeacher' => $addTeacher]);
    }
}
