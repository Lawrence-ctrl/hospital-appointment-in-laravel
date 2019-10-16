<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function doctors() {
        return $this->belonsToMany('App\Doctor');
    }
}
