<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    //protected $redirectTo = '/admin/allstudent';
    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            //student data
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'day_birth' => ['required', 'string', 'min:8'],
            'month_birth' => ['required', 'string', 'min:8'],
            'year_birth' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'string', 'min:12'],
            'email' => ['required', 'string', 'email', 'max:255'],

            //parent data
            'father_name' => ['required', 'string', 'max:255'],
            'mother_name' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],
            'parent_phone' => ['required', 'string', 'min:12'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            //student data
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'day_birth' => $data['day_birth'],
            'month_birth' => $data['month_birth'],
            'year_birth' => $data['year_birth'],
            'student_phone' => $data['student_phone'],
            'email' => $data['email'],
            'religion' => $data['religion'],

            //parent data
            'father_name' => $data['father_name'],
            'mother_name' => $data['mother_name'],
            'occupation' => $data['occupation'],
            'father_phone' => $data['father_phone'],
        ]);
    }
}
