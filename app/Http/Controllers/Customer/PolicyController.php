<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function privacyPolicy() {

        return view('customer.privacy-policy');
    }

    public function shippingPolicy() {

        return view('customer.shipping-policy');
    }

    public function paymentPolicy() {
        
        return view('customer.payment-policy');
    }

    public function returnPolicy() {
        
        return view('customer.return-policy');
    }

    public function shoppingGuide() {

        return view('customer.shopping-guide');
    }
}