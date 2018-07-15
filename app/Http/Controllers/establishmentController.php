<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\establishments;
use DB;

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
        $id = Auth::user()->id;
         $establishments = DB::select('select * from establishments');
        
        
        return view('dashboard.est_profile',['establishments'=>$establishments]);
    }

    public function est_promo() {
        return view('dashboard.est_promo');
    }

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

    public function category() {
        $user = Auth::user();
        Session::put('id', $user->id);
        Session::put('email', $user->email);
        Session::put('first_name', $user->first_name);
        Session::put('last_name', $user->last_name);
        Session::put('user_type', $user->user_type);
        return view('category');
    }
    public function view_addEstablishment() {
        
        return view('dashboard.addEstablishment');
    }

    public function addEstablishment(Request $request) {        
$data = $request->all();
        $id = Auth::user()->id;
        establishments::create([
            'name' => $data['name'],
            'contact_person' => $data['contact_person'],
            'contact_number' => $data['contact_number'],
            'address' => $data['address'],
            'establishment_url' => $data['establishment_url'],
            'liqour_license' => $data['liqour_license'],
            'hs_license' => $data['hs_license'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            'main_picture_url' => $request->main_picture_url[0],
            'picture_2' => $request->main_picture_url[1],
            'picture_3' => $request->main_picture_url[2],
            'creator_id' => $id,
            'last_inspection_date' => $data['last_inspection_date'],
            'user_name' => "Null",
        ]);

        return redirect()->back();
    }
    public function getEstablishment()
    {
//         $id = Auth::user()->id;
        $establishments = establishments::select('select * from establishments where creator_id = 2 ');
        
        
        return view('dashboard.est_profile',['$establishments'=>$establishments]);
    }

//    protected function validator(array $data) {
//        return Validator::make($data, [
//                    'name' => 'required|max:191',
//                    'contact_person' => 'required|max:191',
//                    'contact_number' => 'required|numeric',
//                    'address' => 'required|max:191',
//                    'liquor_license' => 'required|max:191',
//                    'hs_license' => 'required|max:191',
//                    'latitude' => 'required|max:191',
//                    'longitude' => 'required|max:191',
//        ]);
//    }

}
