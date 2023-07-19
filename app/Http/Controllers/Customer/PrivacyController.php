<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class PrivacyController extends BaseController
{
    
    public function index() {
        return view('customer.privacy');
    }
}
