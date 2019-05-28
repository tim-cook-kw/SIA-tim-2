<?php

namespace App\Http\Controllers;
use DB;
use App\Attendance;


use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $model = new Attendance();
            $allattendance = DB::select(
                'call SelectAllAttendance()'
            );

        return view('admin.marks-student-attendence', ['attendances' => $allattendance]);
    }

    // public function add()
    // {
    //     return view('marks-student-attendence');
    // }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'attendance' => 'requered',

    //     ])

    //     attendance::create([
    //         'attendance' => $request->attendance
    //     ]);

    //     return redirect('/attendance');
    // }

    // public function edit($id)
    // {
    //     $attendance = attendance::find($id);
    //     return view('attendance_edit', ['attendance' => $attendance]);
    // }

    // public function update($id, Request $request)
    // {
    //     $this->validate($request, [
    //         'attendance' => 'required'
    //     ]);

    //     $attendance = attendance::find($id);
    //     $attendance -> save();
    //     return redirect('/attendance');
    // }

    // public function delete($id)
    // {
    //     $attendance = attendance::find($id);
    //     $attendance -> delete()
    //     $attendance redirect('/attendance');
    // }

    // public function read_student()
    // {
    //     return view('attendance_read_student', ['attendance' => $attendance]);
    // }

    // public function read_teacher()
    // {
    //     $attendance = attendance::all();
    //     return('attendance_read_teacher', ['attendance' => $attendance]);
    // }
}
