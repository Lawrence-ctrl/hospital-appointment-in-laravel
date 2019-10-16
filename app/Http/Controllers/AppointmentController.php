<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use Carbon\Carbon;
use App\Doctor;
use App\History;
use App\Counting;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointMail;
class AppointmentController extends Controller
{
    public function index(Request $request) {
        $this->validate($request,[
            'patient_name' => 'required|min:5',
            'patient_email' => 'required|email',
            'appointment_phone' => 'required|numeric|min:8',
            'patient_age' => 'required',
            'appointment_depart' => 'required',
            'appointment_doctor' => 'required',
            'appointment_day' => 'required',
            'adate' => 'required'
        ]);
        $email = $request->patient_email;
        $doctor = $request->appointment_doctor;
        $checkemail = Appointment::where([
            ['patient_email','=',$email],
            ['appointment_doctor', '=' ,$doctor]
            ])->get();
        $checkcount = Counting::where([
            ['count_doctor_id','=',$doctor],
            ['count_day_id','=',$request->appointment_day],
            ['count_date','=',$request->adate]
        ])->get();
        if($checkemail->count() == 0) { 
                 if($checkcount->count() > 0) {
                    $yes = $checkcount->first();
                    if($yes->count_hits < 2) {
                        $hit = $yes->count_hits + 1;
                        $id = $yes->id;
                        $nice = Counting::find($id);
                        $nice->count_doctor_id = $doctor;
                        $nice->count_day_id = $request->appointment_day;
                        $nice->count_date = $request->adate;
                        $nice->count_hits = $hit;
                        $nice->created_at = Carbon::now()->format('Y-m-d H:i:s');
                        $nice->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                        $hello =$nice->save();
                    }else{
                        toastr()->error('Bookings are full!','Error!');
                        return redirect()->back();
                    }
                }else{
                        $hit = 1;
                        $nice = new Counting();
                        $nice->count_doctor_id = $doctor;
                        $nice->count_day_id = $request->appointment_day;
                        $nice->count_date = $request->adate;
                        $nice->count_hits = $hit;
                        $nice->created_at = Carbon::now()->format('Y-m-d H:i:s');
                        $nice->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                        $hello = $nice->save();
                    }
                        if($hello) {
                            $appoint = new Appointment();
                            $appoint->patient_name = $request->patient_name;
                            $appoint->patient_email = $request->patient_email;
                            $appoint->appointment_phone = $request->appointment_phone;
                            $appoint->patient_age = $request->patient_age;
                            $appoint->appointment_depart = $request->appointment_depart;
                            $appoint->appointment_doctor = $request->appointment_doctor;
                            $appoint->appointment_day = $request->appointment_day;
                            $appoint->adate = $request->adate;
                            $appoint->save();
                            $gmail = "www.gmail.com";
                            Mail::to($request->patient_email)->send(new AppointMail($hit));
                        toastr()->success('Data have been saved! Please check your <a href="'.$gmail.'"><b>Gmail</b></a>','Success!');
                        return redirect()->back();
                        }
                    
        }else{
            toastr()->error('You are already booked!','Error!');
            return redirect()->back();
        }
    }

    public function show() {
        $today = Carbon::now()->format('Y-m-d');
        $appoint = Doctor::find(1)->appointments()->get();
        $doctor = Doctor::all();
        $cool = Appointment::where('adate','<',$today)->get();
        if($cool->count() > 0) {
            foreach($cool as $next) {
            $history = new History();
            $history->history_patient_name = $next->patient_name;  
            $history->history_patient_email = $next->patient_email;  
            $history->history_appointment_phone = $next->appointment_phone;
            $history->history_patient_age = $next->patient_age;
            $history->history_appointment_depart = $next->appointment_depart;
            $history->history_appointment_doctor = $next->appointment_doctor;
            $history->history_appointment_day = $next->appointment_day;
            $history->history_adate = $next->adate;
            $history->save();
            }
            Appointment::where('adate','<',$today)->delete();
        }
        return view('admin.appointment')->with(['appoint'=>$appoint, 'doctor' => $doctor, 'id' => 1]);
    }

    public function history() {
        $history = History::all();
        return view('admin.history',compact('history'));
    }

    public function choice(Request $request) {
        $id = $request->select_doctor;
        $doctor = Doctor::all();
        $appoint = Doctor::find($id)->appointments()->get();
        return view('admin.appointment',compact(['appoint','doctor','id']));
    }
}
