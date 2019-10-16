<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'hitory_patient_name','hitory_patient_email','hitory_appointment_phone',
        'hitory_patient_age', 'hitory_appointment_depart','hitory_appointment_doctor','hitory_appointment_day','hitory_adate'
    ];

    public function department() {
        return $this->belongsTo('App\Department','history_appointment_depart','id');
    }

    public function doctor() {
        return $this->belongsTo('App\Doctor','history_appointment_doctor','id');
    }

    public function day() {
        return $this->belongsTo('App\Day','history_appointment_day','id');
    }
}
