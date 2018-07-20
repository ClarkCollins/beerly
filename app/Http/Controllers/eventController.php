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
    public function event_profile() {
        $status = "Active";
        $events = DB::select('select * from events where status=?', [$status]);
        $establishments = DB::select('select * from establishments where status =?',[$status]);
        return view('dashboard.event_profile', ['establishments'=>$establishments,'events'=>$events]);
    }
    
    public function deleteEvent(Request $request, $id) {
        $status = $request->input('status');
        DB::update('update events set status = ? where id = ?',[$status,$id]);
        \Session::flash('delete', 'You have successfully deleted your establishment.');
        return redirect('event_profile');
    }
    public function addEvent(Request $request) {
//                $current_date = date("Y/m/d");
         $this->validate($request, [
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
             'photo.*' => 'image|mimes:jpeg,png|max:2048',
        ]);
         
        if ($request->hasfile('photo')) {
            foreach ($request->file('photo') as $image) {
                $name = $image->getClientOriginalName();
                $path[] = $image->move(public_path() . '/upload/', $name);
            }
            
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
    public function updateEvent(Request $request, $id) {
         $this->validate($request, [
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
             'photo.*' => 'image|mimes:jpeg,png|max:2048',
        ]);
         
        if ($request->hasfile('photo')) {
            foreach ($request->file('photo') as $image) {
                $name = $image->getClientOriginalName();
                $path[] = $image->move(public_path() . '/upload/', $name);
            }
            
        }
        
        $events = events::find($id);
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
        $events->main_picture_url = isset($path[0]) ? $path[0] : $path[0] = $request->get('photo1');
        $events->picture_2 = isset($path[1]) ? $path[1] : $path[1] = $request->get('photo2');
        $events->picture_3 = isset($path[2]) ? $path[2] : $path[2] = $request->get('photo3');
        $events->save();
        \Session::flash('update', 'You have successfully updated your event!');
        return redirect('event_profile');
        
    }
    
    public function updateEventView($id) {
        $status = "Active";
        $establishments = DB::select('select * from establishments where status =?',[$status]);
        $events = DB::select('select * from events where id=?',[$id]);
        return view('dashboard.updateEvent', ['events'=>$events,'establishments'=>$establishments]);
    }
   
//    <-----------Everything that has to do with promotions_event---------->
     public function event_promo() {
        $status = "Active";
        $establishments = DB::select('select * from establishments where status =?',[$status]);
        $beers = DB::select('select * from beers');
        $promotions = DB::select('select * from promotions where status =?',[$status]);
         return view('dashboard.event_promo', ['promotions'=>$promotions,'establishments'=>$establishments,'beers'=>$beers]);
    }
 public function deletePromotion(Request $request, $id) {
        $status = $request->input('status');
        DB::update('update promotions set status = ? where id = ?',[$status,$id]);
        \Session::flash('delete', 'You have successfully deleted your promotion');
        return redirect('event_promo');
    }
    public function addPromo_view() {
        $status = "Active";
        $establishments = DB::select('select * from establishments where status =?',[$status]);
        $beers = DB::select('select * from beers');
        return view('dashboard.addPromotions_Event', ['beers' => $beers,'establishments'=>$establishments]);
    }
    public function addPromo(Request $request) {
//        $current_date = date("Y/m/d");
         $this->validate($request, [
            'title' => 'required|max:191',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
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
        return redirect('event_promo');
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
        return redirect('event_promo');
    }
    
    public function updatePromoView($id) {
        $status = "Active";
        $establishments = DB::select('select * from establishments where status =?',[$status]);
        $beers = DB::select('select * from beers');
        $promotions = DB::select('select * from promotions where id=?',[$id]);
        return view('dashboard.updatePromotion_Event', ['promotions'=>$promotions,'establishments'=>$establishments,'beers'=>$beers]);
    }
}
