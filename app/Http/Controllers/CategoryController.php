<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->id = $request->id;
        $category->name = $request->name;
        $category->image = $request->image->store('category');

        $category->save();
        return redirect()->back()->with('message','SuccessFully Category Add');
        
        
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $category = Category::find($id);
        $category->name = $request->input('name');
        
        if($request->hasfile('image')){
            $destination = 'storage/app/public/category/'.$category->image;

            
            
            if(File::exists($destination)){
                
                File::delete($destination);
            }
            $category->image = $request->image->store('category');
            
        }
        
        $category->update();
        return redirect('/categories')->with('message','Category Update');
        
        

        
        // $update =$category->update ([
        //     'name' =>$request->name,
            
        

         
            
        
        
        //   ]);
          
        // if($update){
        //     return redirect('/categories')->with('message','Category Update');
        // }
    }

    public function cat_change(Category $category){

        if($category->status==1)
        {
            $category->update(['status'=>0]);
        }
        else{
            $categories->update(['status'=>1]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $destination = 'storage/'.$category->image;
        $message = "Something went wrong";
    
        if(File::exists($destination)){
                
            File::delete($destination); 
        }
        
        if($category->delete()){
            $message = "category deleted successfully";
        }
        
        return redirect()->back()->with('message',$message);
        
    }
}