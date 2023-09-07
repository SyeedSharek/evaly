<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;


class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $products = Product::where('status',1)->latest()->limit(6)->get();
        
        
        return view('frondend.welcome',compact('categories','subcategories','products'));
    }

    public function about_details(){
        
        $categories = Category::all();
        $subcategories = SubCategory::all();
       
        
        
        return view('frondend.about',compact('categories','subcategories'));
    }

    public function contact_details(){
        
        $categories = Category::all();
        $subcategories = SubCategory::all();
     
        
        
        return view('frondend.contact',compact('categories','subcategories'));
    }

    
    public function shopdetails($id){
        
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $subcategories = SubCategory::all();

        //For Related Products..........
        $category_id = $product->cat_id;
        $related_products = Product::where('cat_id',$category_id)->latest()->limit(4)->get();
        
     
        
        
        return view('frondend.product_pages.shopdetails',compact('categories','subcategories','product','related_products'));
    }

    
    
}