<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferralCode extends Model
{
    protected $table = 'referral_codes';
    protected $fillable = ['code','name'];
}
