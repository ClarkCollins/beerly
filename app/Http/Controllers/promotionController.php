<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\User;
use App\establishments;
use App\promotions;
use Illuminate\Support\Facades\DB;
class promotionController extends Controller
{
    public function est_promo() {
        $status = "Active";
        $establishments = DB::select('select * from establishments where status =?',[$status]);
        $beers = DB::select('select * from beers');
        $promotions = DB::select('select * from promotions where status =?',[$status]);
        return view('dashboard.est_promo', ['promotions'=>$promotions,'establishments'=>$establishments,'beers'=>$beers]);
    }
    public function deletePromotion(Request $request, $id) {
        $status = $request->input('status');
        DB::update('update promotions set status = ? where id = ?',[$status,$id]);
        \Session::flash('delete', 'You have successfully deleted your promotion');
        return redirect('establishment_promo');
    }
    public function addPromo_view() {
        $status = "Active";
        $establishments = DB::select('select * from establishments where status =?',[$status]);
        $beers = DB::select('select * from beers');
        return view('dashboard.addPromotions', ['beers' => $beers,'establishments'=>$establishments]);
    }
    public function addPromo(Request $request) {
//        $current_date = date("Y/m/d");
         $this->validate($request, [
            'title' => 'required|max:191',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'price' => 'required',
            'establishment_name' => 'required',
            'beer_name' => 'required',
        ]);
        $id = Auth::user()->id;
        $promotions = new promotions;
        $promotions->title = $request->input('title');
        $promotions->start_date = $request->input('start_date');
        $promotions->end_date = $request->input('end_date');
        $promotions->price = $request->input('price');
        $promotions->establishment_id = $request->input('establishment_name');
        $promotions->beer_id = $request->input('beer_name');
        $promotions->creator_id = $id;
        $promotions->save();
        \Session::flash('success_message', 'You have successfully added a new promotion!');
        return redirect('establishment_promo');
    }
    public function updatePromo(Request $request, $id) {
//        $current_date = date("Y/m/d");
         $this->validate($request, [
            'title' => 'required|max:191',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'price' => 'required',
            'establishment_name' => 'required',
            'beer_name' => 'required',
        ]);
        $promotions = promotions::find($id);
        $promotions->title = $request->input('title');
        $promotions->start_date = $request->input('start_date');
        $promotions->end_date = $request->input('end_date');
        $promotions->price = $request->input('price');
        $promotions->establishment_id = $request->input('establishment_name');
        $promotions->beer_id = $request->input('beer_name');
        $promotions->save();
        \Session::flash('update_message', 'You have successfully updated your promotion!');
        return redirect('establishment_promo');
    }
    
    public function updatePromoView($id) {
        $status = "Active";
        $establishments = DB::select('select * from establishments where status =?',[$status]);
        $beers = DB::select('select * from beers');
        $promotions = DB::select('select * from promotions where id=?',[$id]);
        return view('dashboard.updatePromotion', ['promotions'=>$promotions,'establishments'=>$establishments,'beers'=>$beers]);
    }
//    <-----------Everything that has to do with beers---------->
 
}
