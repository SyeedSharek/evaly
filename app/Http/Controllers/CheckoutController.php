<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Cart;

class CheckoutController extends Controller
{
    public function index(){
        $categories = Category::all();
        
        return view('frondend.product_pages.cart_checkout',compact('categories'));
    }

    public function login(){
        
        $categories = Category::all();
        
        return view('frondend.product_pages.customerlogin',compact('categories'));
        
    }

    public function cart_delete($id){
         Cart::remove($id);
         return redirect()->back();
        
    }
}