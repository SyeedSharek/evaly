<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function cart_details(Request $request){
        
        $quantity = $request->quantity;
        $id = $request->id;
        
        $products = Product::where('id',$id)->first();
        $data['quantity'] = $quantity; 
        $data['id'] = $products->id; 
        $data['name'] = $products->name; 
        $data['price'] = $products->price; 
        $data['attributes'] = [$products->image];

        Cart::add($data);
        cardArray();
      
        return redirect()->back();
        

        
        

        
    }
}