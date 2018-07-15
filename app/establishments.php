<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class establishments extends Model
{
    protected $fillable = [
        'name','contact_person', 'contact_number','address', 'establishment_url','liqour_license',
        'hs_license','latitude', 'longitude','main_picture_url', 'picture_2','picture_3',
        'creator_id','last_inspection_date', 'user_name'
    ];
}
