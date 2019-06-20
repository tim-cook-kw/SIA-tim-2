<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin', compact('user'));
    }
}
