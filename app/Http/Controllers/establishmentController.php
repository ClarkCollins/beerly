<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Session;
use App\User;

class establishmentController extends Controller
{
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
    public function dashboard()
    {
        $user = Auth::user();
        Session::put('id', $user->id);
        Session::put('email', $user->email);
        Session::put('first_name', $user->first_name);
        Session::put('last_name', $user->last_name);
        return view('dashboard.est_dashboard');
    }
    public function est_profile()
    {
        return view('dashboard.est_profile');
    }
    public function est_promo()
    {
        return view('dashboard.est_promo');
    }
    public function event_dashboard()
    {
        $user = Auth::user();
        Session::put('id', $user->id);
        Session::put('email', $user->email);
        Session::put('first_name', $user->first_name);
        Session::put('last_name', $user->last_name);
        return view('dashboard.event_dashboard');
    }
    public function event_profile()
    {
        return view('dashboard.event_profile');
    }
    public function event_promo()
    {
        return view('dashboard.event_promo');
    }
    public function update_owner_type(Request $request)
    {
        $id=  Session::get('id');
        
        $user = User::find($id);
        $user->user_type = $request->get('user_type');

        $user->save();
        return redirect('establishment_dashboard');
    }
     public function update_event_promoter( Request $request)
    {
         $id = Session::get('id');

        $user = User::find($id);
        $user->user_type = $request->get('user_type');

        $user->save();
        return redirect('event_dashboard');
    }
     public function update_artist( Request $request)
    {
         $id = Session::get('id');

        $user = User::find($id);
        $user->user_type = $request->get('user_type');

        $user->save();
        return redirect('event_dashboard');
    }
    public function category()
    {
        $user = Auth::user();
        Session::put('id', $user->id);
        Session::put('email', $user->email);
        Session::put('first_name', $user->first_name);
        Session::put('last_name', $user->last_name);
        Session::put('user_type', $user->user_type);
        return view('category');
    }
}
