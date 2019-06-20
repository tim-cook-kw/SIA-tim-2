<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

<<<<<<< HEAD
=======
use App\User;

>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
class AdminController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('admin');
=======
        $user = User::all();
        return view('admin', compact('user'));
>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
    }
}
