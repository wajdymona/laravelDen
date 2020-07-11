<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\doctor;
use App\patient;
class appointment extends Model
{
     public function doctor()
    {
        return $this->belongsTo('App\doctor');
    }
     public function patient()
    {
        return $this->belongsTo('App\patient');
    }
}
