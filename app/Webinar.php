<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    //
    public $table = 'webinars';
    public $fillable = ['name','email','college_name','college_id','referred_by','education','gender','age','comments'];

}
