<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class APIServiceCenter extends Model
{
    protected $table = "a_p_i_service_centers";
    
    protected $fillable = [
        'locale','name','phone','address','opening_hour','email','city','state','pin'
    ];
}
