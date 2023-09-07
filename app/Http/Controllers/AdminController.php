<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin; 
use Session;


class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

 

  
    
    public function deshboard_show(Request $request){

        $email = $request->email;
        $password = $request->password;
        
        $result = Admin::where('email',$email)->where('password',$password)->first();

        
        
        if($result){
            
             Session::put('id',$result->id);
             Session::put('name',$result->name);
            
            
            return redirect('/deshboard');
        }
        else{
            
            return redirect('/admins')->with('message','Invalid Email Or Password');
        }
        

        
        
    }


    
}