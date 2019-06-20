<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

<<<<<<< HEAD
use App\User;

=======
<<<<<<< HEAD
=======
use App\User;

>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
class AdminController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $user = User::all();
        return view('admin', compact('user'));
=======
<<<<<<< HEAD
        return view('admin');
=======
        $user = User::all();
        return view('admin', compact('user'));
>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
    }
}
