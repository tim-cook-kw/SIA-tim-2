<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher');
    }
}
