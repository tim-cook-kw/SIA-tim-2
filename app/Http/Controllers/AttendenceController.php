<?php





namespace App\Http\Controllers;
use DB;
use App\Attendence;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Attendence();
        $allAdmattendance = DB::select(
            'call SelectAllAttendance()'
        );

        return view('admin.student-attendence-list', ['attendances' => $allAdmattendance]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-student-attendence');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Attendence();
        DB::insert(
            'call InsertAttendance(?,?,?)',
            [
                $request->input('name'),
                $request->input('date'),
                $request->input('status'),
            ]
        );
        return redirect('admin/attendence');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function show(Attendence $attendence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $model = new Attendence();
        $idAdmattendance = DB::select(
            'call SelectAttendanceWhereId(?)',
            [
                $id,
            ]
        );


        return view('admin.edit-student-attendence', ['attendance' => $idAdmattendance]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = new Attendence();
        DB::insert(
            'call UpdateAttendance(?,?,?,?)',
            [
                $id,
                $request->input('name'),
                $request->input('date'),
                $request->input('status'),
            ]
        );
        return redirect('/admin/attendence');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = new Attendence();
        $allAdmattendance = DB::select(
            'call DelAttendance(?)',
            [
                $id,
            ]
        );

        return redirect('admin/attendence');
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
}
