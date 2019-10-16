<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_name','patient_email','appointment_phone',
        'patient_age', 'appointment_depart','appointment_doctor','appointment_day','adate'
    ];

    public function department() {
        return $this->belongsTo('App\Department','appointment_depart','id');
    }

    public function doctor() {
        return $this->belongsTo('App\Doctor','appointment_doctor','id');
    }

    public function day() {
        return $this->belongsTo('App\Day','appointment_day','id');
    }
}
