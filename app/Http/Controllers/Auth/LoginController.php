<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/establishment_dashboard';
     public function authenticated(Request $request , $user){
        $user = Auth::user();
        Session::put('id', $user->id);
        Session::put('email', $user->email);
        Session::put('first_name', $user->first_name);
        Session::put('last_name', $user->last_name);
    if($user->user_type=='Establishment Owner'){
        return view('dashboard.est_dashboard');
    }elseif($user->user_type=='Event Promoter'){
        return view('dashboard.event_dashboard');
    }
    elseif($user->user_type=='Artist'){
        return view('dashboard.event_dashboard');
    }
    elseif($user->user_type==''){
        return view('category');
    }
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        
        $this->middleware('guest')->except('logout');
        
    }
   
    public function index()
    {
        
        return view('auth.login');
    }
    
//    public function setSession()
//    {
//    $user = Auth::user();
//    Session::put('email', $user->email);
//    }
}
