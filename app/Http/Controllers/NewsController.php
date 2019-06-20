<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

class NewsController extends Controller
{
    public function read()
    {
        $news = News::all();
        return view('/admin/add-announcement',['news' => $news]);
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
            'subject' => 'required',
            'description' => 'required',
            'created_by' => 'required'
    	]);
 
        news::create([
            'subject' => $request->subject,
            'description' => $request->description,
            'created_by' => $request->created_by
    	]);
 
<<<<<<< HEAD
    	return redirect('/dashboard/admin/addannouncement');
=======
    	return redirect('/admin/addannouncement');
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
    }
    public function edit ($id)
    {
        $news = News::find($id);
        return view('/admin/add-announcement',['news' => $news]);
    }
    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
<<<<<<< HEAD
        return redirect('/dashboard/admin/addannouncement');
=======
        return redirect('/admin/addannouncement');
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
    }
    public function readteacher()
    {
        $news = News::all();
        return view('/teacher/dashboard',['news' => $news]);
    }
    public function readstudent()
    {
        $news = News::all();
        return view('/student/dashboard',['news' => $news]);
    }
}
