<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'doctor_name','department_id','degree'
    ];

    public function department() {
        return $this->belongsTo('App\Department');
    }

    public function days() {
        return $this->belongsToMany('App\Day','doctor_days')->withPivot('day_id','doctor_id');
    }

    public function appointments() {
        return $this->hasMany('App\Appointment','appointment_doctor','id');
    }
}
