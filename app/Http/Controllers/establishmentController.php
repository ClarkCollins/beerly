<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\User;
use App\establishments;
use Illuminate\Support\Facades\DB;

class establishmentController extends Controller {

    public function __construct() {
//        if ( ! Session::has('email'))
//    {
//        $allowed = array(
//             // All allowed function names for not logged in users ( i keep it empty usually)
//        );
//        if ( ! in_array($this->router->fetch_method(), $allowed))
//        {
//            return view('auth.login');
//        }
//    }
    }

    public function dashboard() {
        $user = Auth::user();
        Session::put('id', $user->id);
        Session::put('email', $user->email);
        Session::put('first_name', $user->first_name);
        Session::put('last_name', $user->last_name);
        return view('dashboard.est_dashboard');
    }

    public function est_profile() {
        $status = "Active";
        $establishments = DB::select('select * from establishments where status =?',[$status]);
        return view('dashboard.est_profile', ['establishments' => $establishments]);
    }

    public function view_addEstablishment() {

        return view('dashboard.addEstablishment');
    }
    public function deleteEstablishment(Request $request, $id) {
        $status = $request->input('status');
        DB::update('update establishments set status = ? where id = ?',[$status,$id]);
        \Session::flash('delete', 'You have successfully deleted your establishment.');
        return redirect('establishment_profile');
    }

    public function addEstablishment(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:191',
            'contact_person' => 'required|max:191',
            'contact_number' => 'required|numeric|min:10',
            'address' => 'required|max:191',
            'liqour_license' => 'required|max:191',
            'hs_license' => 'required|max:191',
            'latitude' => 'required|max:191',
            'longitude' => 'required|max:191',
            'photo.*' => 'image|mimes:jpeg,png|max:2048',
        ]);
        if ($request->hasfile('photo')) {

            foreach ($request->file('photo') as $image) {
                $name = $image->getClientOriginalName();
                $path[] = $image->move(public_path() . '/upload/', $name);
            }
        }
        
        $id = Auth::user()->id;
        $establisments = new establishments;
        $establisments->name = $request->input('name');
        $establisments->contact_person = $request->input('contact_person');
        $establisments->contact_number = $request->input('contact_number');
        $establisments->address = $request->input('address');
        $establisments->establishment_url = $request->input('establishment_url');
        $establisments->liqour_license = $request->input('liqour_license');
        $establisments->hs_license = $request->input('hs_license');
        $establisments->latitude = $request->input('latitude');
        $establisments->longitude = $request->input('longitude');
        $establisments->main_picture_url = isset($path[0]) ? $path[0] : null;
        $establisments->picture_2 = isset($path[1]) ? $path[1] : null;
        $establisments->picture_3 = isset($path[2]) ? $path[2] : null;
        $establisments->last_inspection_date = $request->input('last_inspection_date');
        $establisments->creator_id = $id;
        $establisments->user_name = "Null";
        $establisments->save();
        \Session::flash('message', 'You have successfully added a new establishment!');
        return redirect('establishment_profile');
    }

    public function updateEstablishment(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required|max:191',
            'contact_person' => 'required|max:191',
            'contact_number' => 'required|numeric|min:10',
            'address' => 'required|max:191',
            'liqour_license' => 'required|max:191',
            'hs_license' => 'required|max:191',
            'latitude' => 'required|max:191',
            'longitude' => 'required|max:191',
            'photo.*' => 'image|mimes:jpeg,png|max:2048',
            'photo.*.image' => 'Only images allowed',
             'photo.*.mimes' => 'Only jpeg,jpg and png images are allowed',
        'photo.*.max' => 'Sorry! Maximum allowed size for an image is 2MB',
        ]);
        
        if ($request->hasfile('photo')) {
            foreach ($request->file('photo') as $image) {
                $name = $image->getClientOriginalName();
                $path[] = $image->move(public_path() . '/upload/', $name);
            }
            
        }
        else{
           
//                $path[0] = $request->get('photo1');
//                $path[1] = $request->get('photo2');
//                $path[2] = $request->get('photo3');
            
        }
        $establisments = establishments::find($id);
        $establisments->name = $request->get('name');
        $establisments->contact_person = $request->get('contact_person');
        $establisments->contact_number = $request->get('contact_number');
        $establisments->establishment_url = $request->get('establishment_url');
        $establisments->address = $request->get('address');
        $establisments->liqour_license = $request->get('liqour_license');
        $establisments->hs_license = $request->get('hs_license');
        $establisments->latitude = $request->get('latitude');
        $establisments->longitude = $request->get('longitude');
        $establisments->main_picture_url = isset($path[0]) ? $path[0] : $path[0] = $request->get('photo1');
        $establisments->picture_2 = isset($path[1]) ? $path[1] : $path[1] = $request->get('photo2');
        $establisments->picture_3 = isset($path[2]) ? $path[2] : $path[2] = $request->get('photo3');

        $establisments->last_inspection_date = $request->get('last_inspection_date');
        $establisments->save();


        \Session::flash('update', 'You have successfully updated your establishment!');
        return redirect('establishment_profile');
    
            }

    public function updateEstablishmentView($id) {
        $establishments = DB::select('select * from establishments where id =?', [$id]);
        return view('dashboard.updateEstablishment', ['establishments' => $establishments]);
    }
    
//    <-----------Everything that has to do with events and promotions---------->
    
     
    public function event_dashboard() {
        $user = Auth::user();
        Session::put('id', $user->id);
        Session::put('email', $user->email);
        Session::put('first_name', $user->first_name);
        Session::put('last_name', $user->last_name);
        return view('dashboard.event_dashboard');
    }

    public function event_profile() {
        return view('dashboard.event_profile');
    }

    public function event_promo() {
        return view('dashboard.event_promo');
    }

//    <-----------Everything that has to do with selecting category or user type---------->
    
    public function category() {
        $user = Auth::user();
        Session::put('id', $user->id);
        return view('category');
    }
    public function update_owner_type(Request $request) {
        $id = Session::get('id');
        $user = User::find($id);
        $user->user_type = $request->get('user_type');
        $user->save();
        return redirect('establishment_dashboard');
    }

    public function update_event_promoter(Request $request) {
        $id = Session::get('id');
        $user = User::find($id);
        $user->user_type = $request->get('user_type');
        $user->save();
        return redirect('event_dashboard');
    }

    public function update_artist(Request $request) {
        $id = Session::get('id');
        $user = User::find($id);
        $user->user_type = $request->get('user_type');
        $user->save();
        return redirect('event_dashboard');
    }

}
