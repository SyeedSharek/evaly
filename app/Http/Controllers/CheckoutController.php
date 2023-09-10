<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    public function index(){
        return view('frondend.product_pages.cart_checkout');
    }

    public function login(){
        
    }

    public function cart_delete($id){
         Cart::remove($id);
         return redirect()->back();
        
    }
}