<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $fillable = [
        'title','contact_person', 'contact_number','address', 'event_url','end_date',
        'start_date','latitude', 'longitude','main_picture_url', 'picture_2','picture_3',
        'creator_id','description', 'establishment_id'
    ];
}
