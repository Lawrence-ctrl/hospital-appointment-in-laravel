<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'department_name','department_slug'
    ];

    public function doctors() {
        return $this->hasMany('App\Doctor');
    }
}
