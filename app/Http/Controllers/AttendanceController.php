<?php

namespace App\Http\Controllers;
use DB;
use App\Attendance;


use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //select
    public function indexAdmin()
    {
        $model = new Attendance();
            $allAdmattendance = DB::select(
                'call SelectAllAttendance()'
            );

        return view('admin.student-attendence-list', ['attendances' => $allAdmattendance]);
    }



    public function addAdmin()
    {


        return view('admin.add-student-attendence');
    }

    public function saveAdmin(Request $request){
        $model = new Attendance();
        DB::insert(
            'call InsertAttendance(?,?,?)',
            [
                $request->input('name'),
                $request->input('date'),
                $request->input('status'),
            ]
        );
        return redirect('/dashboard/admin/studentattendencereport');
        }

    public function indexStudent()
    {
        $studentname = "fajar";
        $model = new Attendance();

            $allStdnattendance = DB::select(

                'call SelectAllAttWhereStudentName(?)', [$studentname]
            );

        return view('student.attendence', ['studentatt' => $allStdnattendance]);
    }

    public function indexTeacher()
    {
        $model = new Attendance();
        $allTchrattendance = DB::select(
            'call SelectAllAttendance()'
        );

    return view('admin.marks-student-attendence', ['attendances' => $allTchrattendance]);
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
