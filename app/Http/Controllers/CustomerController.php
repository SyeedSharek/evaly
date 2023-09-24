<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;

use Session;

class CustomerController extends Controller
{
    public function index(){
        return view('frondend.customer.login');
    }



    public function login(Request $request){
        
        
        $email = $request->email;
        $password = $request->password;
        $categories = Category::all();
        
        
        $result = Customer::where('email',$email)->where('password',$password)->first();
        if($result){
            Session::put('id',$result->id);
            Session::put('name',$result->name);
            return view('frondend.product_pages.cart_checkout',compact('categories'));
        }
        else{
            
            return redirect()->back()->with('message','Email Or Password Invaild');
        }
        
        
        
    }
    

    public function new_register(){
        
        $categories = Category::all();
        
        return view('frondend.customer.registration',compact('categories'));
        
    }

    public function store(Request $request){


         $customer_data = array();
         $customer_data['name'] =$request->name;
         $customer_data['email']=$request->email;
         $customer_data['phone']=$request->phone;
         $customer_data['password']=$request->password;
         $id = Customer::InsertGetId($customer_data);
         Session::put('id',$request->id);
         Session::put('cus_name',$request->name);

         return redirect('/customer_login');
        
        
        
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
    
    
    
}