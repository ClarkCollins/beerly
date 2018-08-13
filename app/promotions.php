<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promotions extends Model
{
    protected $fillable = [
        'title','start_date','end_date', 'price', 'establishment_id','beer_id','creator_id'
    ];
}
