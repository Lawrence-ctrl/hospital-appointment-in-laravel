<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counting extends Model
{
    protected $fillable = [
        'count_doctor_id','count_day_id','count_date','count_hits'
    ];

    public $table = 'countings';

    public function doctor() {
        return $this->belongsTo('App\Doctor','count_doctor_id','id');
    }

    public function day() {
        return $this->belongsTo('App\Day','count_day_id','id');
    }
}
