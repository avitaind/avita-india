<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class APIServiceCentre extends Model
{
    protected $table = "a_p_i_service_centres";

    protected $fillable = [
        'locale','name','phone','address','opening_hour','email','city','state','pin'
    ];
}