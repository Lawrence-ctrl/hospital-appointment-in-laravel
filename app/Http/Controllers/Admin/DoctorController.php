<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use session;
use App\Doctor;
use App\Department;
use App\Day;
use DB;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $depart = Department::all();
        $doctor = Doctor::all();
        $day = Day::all();
        return view('admin.doctor')->with(['depart' => $depart, 'doctor' => $doctor, 'day' => $day]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'doctor_name' => 'required|min:5|unique:doctors,doctor_name',
            'department_id' => 'required',
            'doctor_degree' => 'required',
        ]);

        $doctor = new Doctor();
        $doctor->doctor_name = $request->doctor_name;
        $doctor->department_id = $request->department_id;
        $doctor->degree = $request->doctor_degree;
        $doctor->save();
        $doctor->days()->attach(implode(',',$request->day_id));
        // $hello = DB::insert('insert into doctor_days(doctor_id,day_id) values (?, ?)', [1, $days]);
        toastr()->success('Data has been successfully saved','Success!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
