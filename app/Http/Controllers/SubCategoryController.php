<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        
        return view('admin.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subcategory = new SubCategory;
        
        $subcategory->cat_id = $request->category;
        $subcategory->name = $request->name;
        
        $subcategory->save();
        if($subcategory){
            return redirect()->back()->with('message','Successfully Sub Category Add');
        }
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
    public function edit(Subcategory $subcategory)
    {
        
        $categories = Category::all();
        return view('admin.subcategory.edit',compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $update = $subcategory->update([
            'cat_id'=>$request->category,
            'name'=>$request->name,
            
        ]);

        if($update){
            return redirect('/subcategories')->with('message','Edit Success');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subCategory $subcategory)
    {

        $delete = $subcategory->delete();
        if($delete){
            return redirect()->back();
        }
        
    }
}