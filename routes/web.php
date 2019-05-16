<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin')->middleware('superadmin');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/teacher', 'TeacherController@index')->name('teacher')->middleware('teacher');
Route::get('/student', 'StudentController@index')->name('student')->middleware('student');

Route::get('/home', 'HomeController@index')->name('home');
