<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscription_account extends Model
{
    protected $fillable = [
        'creator_id','payment_date', 'balance'
    ];
}



