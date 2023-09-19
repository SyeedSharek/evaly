<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use Session;

class CustomerController extends Controller
{
    public function index(){
        return view('frondend.customerlogin.login');
    }



    public function login(Request $request){
        
        
        $email = $request->email;
        $password = $request->password;
        $categories = Category::all();
        
        
        $result = Customer::where('email',$email)->where('password',$password)->first();
        if($result){
            Session::put('id',$result->id);
            return view('frondend.product_pages.cart_checkout',compact('categories'));
        }
        else{
            
            return redirect()->back()->with('message','Email Or Password Invaild');
        }
        
        
        
    }
    

    public function new_register(){
        
        $categories = Category::all();
        
        return view('frondend.customerlogin.registration',compact('categories'));
        
    }

    public function store(Request $request){
        
       $customer = new Customer;
        // $customer->id = $request->id;
        //dd($request);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->password = $request->password;
        // $id = Customer::InsertGetId($customer);
         Session::put('id',$request->id);
         Session::put('name',$request->name);
         
         
        
       
        $customer->save();
         return view('frondend.customerlogin.login');
        
        
        
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
    
}