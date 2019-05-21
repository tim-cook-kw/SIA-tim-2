<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

class NewsController extends Controller
{
    public function index()
    {
    	$news = news::all();
    	return view('news', ['news' => $news]);
    }
    public function add()
    {
        return view ('news_add');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'news' => 'required',
    	]);
 
        news::create([
    		'news' => $request->news
    	]);
 
    	return redirect('/news');
    }
    public function edit($id)
    {
        $news = news::find($id);
        return view('news_edit', ['news' => $news]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
	        'news' => 'required'
         ]);
 
        $news = news::find($id);
        $news->news = $request->news;
        $news->save();
        return redirect('/news');
    }
    public function delete($id)
    {
        $news = news::find($id);
        $news->delete();
        return redirect('/news');
    }
    public function read_student()
    {
    	$news = news::all();
    	return view('news_read_student', ['news' => $news]);
    }
    public function read_teacher()
    {
    	$news = news::all();
    	return view('news_read_student', ['news' => $news]);
    }
}
