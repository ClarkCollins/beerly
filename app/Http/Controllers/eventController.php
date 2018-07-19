<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\User;
use App\establishments;
use App\promotions;
use App\events;
use Illuminate\Support\Facades\DB;
class eventController extends Controller
{
    public function event_add_view() {
        $status = "Active";
        $establishments = DB::select('select * from establishments where status =?',[$status]);
        return view('dashboard.addEvent', ['establishments'=>$establishments]);
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
    public function addEvent(Request $request) {
         $this->validate($request, [
            'title' => 'required|max:191',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'establishment_name' => 'required',
             'longitude' => 'required|max:191',
             'latitude' => 'required|max:191',
             'description' => 'required|max:191',
             'contact_person' => 'required|max:191',
             'contact_number' => 'required|numeric|min:10', 
             'address|max:191' => 'required', 
             'photo.*' => 'image|mimes:jpeg,png|max:2048',
        ]);
        if ($request->hasfile('photo')) {
            foreach ($request->file('photo') as $image) {
                $name = $image->getClientOriginalName();
                $path[] = $image->move(public_path() . '/upload/', $name);
            }
            
        }
        else{
            
        }
        $id = Auth::user()->id;
        $events = new events;
        $events->title = $request->input('title');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->description = $request->input('description');
        $events->establishment_id = $request->input('establishment_name');
        $events->longitude = $request->input('longitude');
        $events->latitude = $request->input('latitude');
        $events->address = $request->input('address');
        $events->contact_person = $request->input('contact_person');
        $events->contact_number = $request->input('contact_number');
        $events->event_url = $request->input('event_url');
        $events->main_picture_url = isset($path[0]) ? $path[0] : null;
        $events->picture_2 = isset($path[1]) ? $path[1] : null;
        $events->picture_3 = isset($path[2]) ? $path[2] : null;
        $events->creator_id = $id;
        $events->save();
        \Session::flash('success_message', 'You have successfully added a new event!');
        return redirect('event_profile');
    }
    public function updatePromo(Request $request, $id) {
//        $current_date = date("Y/m/d");
         $this->validate($request, [
            'title' => 'required|max:191',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
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
