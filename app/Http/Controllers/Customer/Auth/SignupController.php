<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    
    public function index() {

        return view('customer.auth.signup');
    }
}
