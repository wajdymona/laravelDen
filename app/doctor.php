<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\appointment;
use App\User;
class doctor extends Model
{
    public function appointment()
    {
        return $this->hasMany('App\appointment');
    }
    public function user()
    {
    	return $this->hasOne('App\User','id','user_id');
    }
    protected $fillable = [

       'id', 'user_id', 'f_name','l_name','age','phone','address','specialty','Experience'

    ];
}
