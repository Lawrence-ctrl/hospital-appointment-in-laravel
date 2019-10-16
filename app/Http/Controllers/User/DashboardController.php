<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Doctor;
use App\Day;
use App\Appointment;
use App\History;
use Carbon\Carbon;
use DB;
class DashboardController extends Controller
{
    public function index() {
        $today = Carbon::now()->format('Y-m-d');
        $appoint = Appointment::all();
        $cool = Appointment::where('adate','<',$today)->get();
        if($cool->count() > 0) {
            foreach ($cool as $next) {
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
            $try = Appointment::where('adate','<',$today)->delete();
        }
        $department = Department::all();
        return view('user.dashboard',compact('department'));
    }

    public function change(Request $request) {
        $id = $request->get('id');
        // $yes = DB::table('doctors')->where('department_id',$id)->get();
        $yes = Department::find($id)->doctors()->get();
        $output = '<option value="">--SELECT DOCTOR--</option>';
        foreach ($yes as $doctor) {
            $output.= '<option value="'.$doctor->id.'">'.$doctor->doctor_name.'</option>';
        }
        echo $output;
    }

    public function forchange(Request $request) {
        $id = $request->get('id');
        // $yes = DB::table('doctors')->where('department_id',$id)->get();
        $yes = Doctor::find($id)->days()->get();
    
        foreach ($yes as $days){
            $one = $days->pivot->day_id;
            $array = explode(',',$one);
            $change = Day::whereIn('id',$array)->get();
        }
        $output = '<option value="">--SELECT DAy--</option>';
        foreach ($change as $new) {
            $output.= '<option value="'.$new->id.'">'.$new->day_name.'</option>';
        }
        echo $output;
    }

   
}
