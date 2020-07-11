<?php

namespace App;
use App\appointment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $guarded = ['id'];
     public function user()
    {
    	return $this->hasOne('App\User','id','user_id');
    }
    public function appointment()
    {
        return $this->hasMany('App\appointment');
    }
}
