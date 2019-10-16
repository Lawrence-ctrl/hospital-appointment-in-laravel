<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role_name','role_slug'
    ];

    public function users() {
        return $this->hasMany('App\User');
    }
}
