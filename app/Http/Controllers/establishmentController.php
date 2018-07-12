<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class establishmentController extends Controller
{
    public function __construct() {
//        parent::__construct();
//        if ( ! $this->Session->userdata('username'))
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
}
