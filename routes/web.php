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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login.login');

});

Route::get('/welcome', function () {
    return view('welcome');

});

Auth::routes();

Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin')->middleware('superadmin');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/teacher', 'TeacherController@index')->name('teacher')->middleware('teacher');
Route::get('/student', 'StudentController@index')->name('student')->middleware('student');

Route::get('/home', 'HomeController@index')->name('home');

//admin add student
Route::get('/admin/showStudent','AddStudentController@showStudent')->name('showStudent');
Route::get('/admin/addStudent','AddStudentController@addStudentForm');
Route::post('/admin/addStudent','AddStudentController@addStudent')->name('addStudent');

// admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
//Route::get('/admin/allstudent', function () {
//    return view('admin.all-student');
//});
<<<<<<< HEAD
=======
Route::get('/admin/addannouncement','NewsController@read');
Route::post('/admin/addannouncement/store', 'NewsController@store');
Route::get('/admin/addannouncement{id}', 'NewsController@edit');
Route::get('/admin/addannouncement/delete/{id}', 'NewsController@delete');

>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
Route::get('/admin/addteacher', function () {
    return view('admin.add-student');
});
Route::get('/admin/addsubject', function () {
    return view('admin.add-subject');
});
Route::get('/admin/addsection', function () {
    return view('admin.add-section');
});
Route::get('/admin/addclass', function () {
    return view('admin.add-class');
});
<<<<<<< HEAD
Route::get('/admin/addannouncement', function () {
    return view('admin.add-announcement');
});
=======
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
Route::get('/admin/classtimetable', function () {
    return view('admin.class-timetable');
});
Route::get('/admin/createtimetable', function () {
    return view('admin.create-timetable');
});

<<<<<<< HEAD
//attendence
Route::resource('/admin/attendence', 'AttendenceController');
Route::get('/admin/attendence/{id}/delete','AttendenceController@destroy');
Route::get('/teacher/attendence', 'AttendenceController@index');
Route::get('/student/attendence', 'AttendenceController@indexstudent');
//endattendence

=======

Route::get('/dashboard/admin/studentattendencereport', 'AttendanceController@indexAdmin');
Route::get('/dashboard/admin/addstudentattendence', 'AttendanceController@addAdmin');
Route::get('/dashboard/admin/editstudentattendence/{id}', 'AttendanceController@addAdmin');
Route::get('/dashboard/student/attendence', 'AttendanceController@indexStudent');
// Route::post('/dashboard/admin/saveeditstudentattendence/{id}', '');
Route::post('/dashboard/admin/savestudentattendence', 'AttendanceController@saveAdmin');


Route::get('/admin/teacherattendencereport', function () {
    return view('teacher.attendence-report');
});


//student
Route::get('/student/attendence', function() {
    return view('student.attendence');
});
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
Route::get('/student/attendencedetail', function() {

    return view('student.attendence-detailed');
});
Route::get('/student/assignmentdownload', function() {
    return view('student.assignment-download');
});
Route::get('/student/assignmentupload', function() {
    return view('student.assignment-upload');
});
Route::get('/student/examplan', function() {
    return view('student.exam-plan');
});
Route::get('/student/examschedule', function() {
    return view('student.exam-schedule');
});
Route::get('/student/fees', function() {
    return view('student.fees');
});
Route::get('/student/marks', function() {
    return view('student.marks');
});

//teacher
Route::get('/teacher/dashboard', function() {
    return view('teacher.dashboard');
});
Route::get('/teacher/addstudentmarks', function() {
    return view('teacher.add-student-marks');
});
Route::get('/teacher/assignmentdownload', function() {
    return view('teacher.assignment-download');
});
Route::get('/teacher/attendencereport', function() {
    return view('teacher.attendence-report');
});
Route::get('/teacher/createassignment', function() {
    return view('teacher.create-assignment');
});
Route::get('/teacher/marksreport', function() {
    return view('teacher.marks-report');
});
Route::get('/teacher/attendencereport', function() {
    return view('teacher.attendence-report');
});
Route::get('/teacher/marksstudentattendence', function() {
    return view('teacher.marks-student-attendence');
});
Route::get('/teacher/timetable', function() {
    return view('teacher.timetable');
});
Route::get('/teacher/viewstudentattendence', function() {
    return view('teacher.view-student-attendence');
});
Route::get('/teacher/viewstudentmarks', function() {
    return view('teacher.view-student-marks');
});


Route::get('/dashboard/admin/login/', function() {
    return view('login.login');
});

Route::get('/login2', function() {
    return view('login.login');
});

Route::get('/login2', function() {
    return view('login.login');
});

