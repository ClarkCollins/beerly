<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;

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
    protected $redirectTo = '/establishment_dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $data = Array ([email] => $this->input->post('email'));
        Session::push('user', $data);
        $this->middleware('guest')->except('logout');
        
    }
    public function index()
    {
        return view('auth.login');
    }
    
//    public function setSession(Request $req)
//    {
//        Session::put('email', $email);
//    }
}
