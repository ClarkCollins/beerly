<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\User;
use App\establishments;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
        $establishments = DB::table('establishments')->paginate(5);
//        $establishments = DB::select('select * from establishments')->paginate(6);
        return view('dashboard.est_profile', ['establishments' => $establishments]);
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
        
        $this->validate($request,[
                    'name' => 'required|max:191',
                    'contact_person' => 'required|max:191',
                    'contact_number' => 'required|numeric|min:10',
                    'address' => 'required|max:191',
                    'liqour_license' => 'required|max:191',
                    'hs_license' => 'required|max:191',
                    'latitude' => 'required|max:191',
                    'longitude' => 'required|max:191',
             'photo.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
   
    
        if ($request->hasfile('photo')) {

            foreach ($request->file('photo') as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->move(public_path() . '/upload/', $name);
                $data[] = $path;
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
                $establisments->main_picture_url = $data[0];
                $establisments->picture_2 = $data[1];
                $establisments->picture_3 = $data[2];
                $establisments->last_inspection_date = $request->input('last_inspection_date');
                $establisments->creator_id = $id;
                $establisments->user_name = "Null";
                $establisments->save();
           \Session::flash('message', 'You have successfully added a new establishment!');
           
           return redirect('establishment_profile');


//        return view('dashboard.est_profile');
    }

    public function updateEstablishment(Request $request, $id) {
        $name = $request->input('name');
        $contact_person = $request->input('contact_person');
        $contact_number = $request->input('contact_number');
        $address = $request->input('address');
        $establishment_url = $request->input('establishment_url');
        $liqour_license = $request->input('liqour_license');
        $hs_license = $request->input('hs_license');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $main_picture_url = $request->main_picture_url[0];
        $main_picture_url2 = $request->main_picture_url[1];
        $main_picture_url3 = $request->main_picture_url[2];
        $last_inspection_date = $request->input('last_inspection_date');
        DB::update('update establishments set name = ?,contact_person=?,contact_number=?,address=?,establishment_url=?,'
                . 'liqour_license=?,hs_license=?,latitude=?,longitude=?,main_picture_url=?,picture_2=?,picture_3=?,last_inspection_date=?,'
                . ' where id = ?', [$name, $contact_person, $contact_number, $address, $establishment_url,
            $liqour_license, $hs_license, $latitude, $longitude, $main_picture_url,
            $main_picture_url2, $main_picture_url3, $last_inspection_date, $id]);

        return view('dashboard.est_profile');
    }

    public function updateEstablishmentView($id) {
        $establishments = DB::select('select * from establishments where id =?', [$id]);
        return view('dashboard.updateEstablishment', ['establishments' => $establishments]);
    }

    public function getEstablishment() {
//         $id = Auth::user()->id;
        $establishments = establishments::select('select * from establishments where creator_id = 2 ');


        return view('dashboard.est_profile', ['$establishments' => $establishments]);
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
