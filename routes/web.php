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
    return view('home');
});

//admin

Route::get('/dashboard/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard/admin/addstudent', function () {
    return view('admin.add-student');
});

Route::get('/dashboard/admin/addteacher', function () {
    return view('admin.add-student');
});

Route::get('/dashboard/admin/addsubject', function () {
    return view('admin.add-subject');
});

Route::get('/dashboard/admin/addsection', function () {
    return view('admin.add-section');
});

Route::get('/dashboard/admin/addclass', function () {
    return view('admin.add-class');
});

Route::get('/dashboard/admin/addannouncement', function () {
    return view('admin.add-announcement');
});

Route::get('/dashboard/admin/classtimetable', function () {
    return view('admin.class-timetable');
});

Route::get('/dashboard/admin/createtimetable', function () {
    return view('admin.create-timetable');
});


//student

Route::get('/dashboard/student/attendence', function() {
    return view('student.attendence');
});

Route::get('/dashboard/student/attendencedetail', function() {
    return view('student.attendence-detailed');
});

Route::get('/dashboard/student/assignmentdownload', function() {
    return view('student.assignment-download');
});

Route::get('/dashboard/student/assignmentupload', function() {
    return view('student.assignment-upload');
});

Route::get('/dashboard/student/examplan', function() {
    return view('student.exam-plan');
});

Route::get('/dashboard/student/examschedule', function() {
    return view('student.exam-schedule');
});

Route::get('/dashboard/student/fees', function() {
    return view('student.fees');
});

Route::get('/dashboard/student/marks', function() {
    return view('student.marks');
});

//teacher

Route::get('/dashboard/teacher/dashboard', function() {
    return view('teacher.dashboard');
});

Route::get('/dashboard/teacher/addstudentmarks', function() {
    return view('teacher.add-student-marks');
});

Route::get('/dashboard/teacher/assignmentdownload', function() {
    return view('teacher.assignment-download');
});

Route::get('/dashboard/teacher/attendencereport', function() {
    return view('teacher.attendence-report');
});

Route::get('/dashboard/teacher/createassignment', function() {
    return view('teacher.create-assignment');
});

Route::get('/dashboard/teacher/marksreport', function() {
    return view('teacher.marks-report');
});

Route::get('/dashboard/teacher/attendencereport', function() {
    return view('teacher.attendence-report');
});

Route::get('/dashboard/teacher/marksstudentattendence', function() {
    return view('teacher.marks-student-attendence');
});

Route::get('/dashboard/teacher/timetable', function() {
    return view('teacher.timetable');
});

Route::get('/dashboard/teacher/viewstudentattendence', function() {
    return view('teacher.view-student-attendence');
});

Route::get('/dashboard/teacher/viewstudentmarks', function() {
    return view('teacher.view-student-marks');
});