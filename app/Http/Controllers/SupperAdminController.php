<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin; 
use Session;

class SupperAdminController extends Controller
{
    public function deshboard(){
        
        $this->Authentication();

        return view('admin.deshboard');
    } 

    public function logout(){
        Session::flush();
            return redirect('/admins');
            
    }
    
    public function Authentication(){
        $id = Session::get('id');
        
        if($id){
            return;
        }
        else{
            return redirect('/admins')->send();
        }
    }
}