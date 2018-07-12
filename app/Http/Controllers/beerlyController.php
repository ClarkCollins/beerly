<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class beerlyController extends Controller
{
     public function insert_establishment_owner()
    {
         $id= "Oluyemi@gmail.com";
         $user_type = App/User::find($id);

        $user_type->username = "establishment owner";

        $user_type->save();
        return redirect('\home');
    }
     public function insert_event_promoter( Request $seg)
    {
//        $event_promoter
    }
     public function insert_artist( Request $seg)
    {
//        $artist
    }
}
