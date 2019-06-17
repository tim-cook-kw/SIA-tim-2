<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Students;

class AddStudentController extends Controller
{
    public function addStudentForm() {
        return view('admin.add-student');
    }

    public function addStudent(Request $request) {
        $addStudent = new Students();
 
        $addStudent->student_first_name = request('student_first_name');
        $addStudent->student_last_name = request('student_last_name');
        $addStudent->student_nick_name = request('student_nick_name');
        $addStudent->gender = request('gender');
        $addStudent->student_place_of_birth = request('student_place_of_birth');
        $addStudent->student_day_birth = request('student_day_birth');
        $addStudent->student_month_birth = request('student_month_birth');
        $addStudent->student_year_birth = request('student_year_birth');
        $addStudent->student_phone = request('student_phone');
        $addStudent->student_email = request('student_email');
        $addStudent->student_religion = request('student_religion');
        $addStudent->student_nasionality = request('student_nasionality');
        $addStudent->student_address = request('student_address');
        $addStudent->student_country = request('student_country');
        $addStudent->student_state = request('student_state');
        $addStudent->student_zip = request('student_zip');
 
        $addStudent->save();
 
        return redirect('/admin/showStudent');
     }

    public function showStudent(){
 
        $addStudent = Students::all();
 
        return view('admin.all-student');
    }
}
