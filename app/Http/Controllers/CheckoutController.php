<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('frondend.product_pages.cart_details');
    }
}