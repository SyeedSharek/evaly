<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    public function subcat_change(){

        $subcategory = Subcategory::where('cat_id',$id)->get();
        return response()->json($subcategory);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        
        return view('admin.product.create',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        $product = new Product;
        $product->id = $request->id;
        $product->cat_id = $request->category;
        $product->subcat_id = $request->subcategory;
        $product->name = $request->name;
        $product->size = json_encode($request->size);
        $product->color = json_encode($request->color);
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stockin = $request->stockin;
        
        
        
        
        $image = array();
        if($files = $request->file('image')){
        
        
            $i = 0;
           foreach($files as $file){

            $name = $file->getClientOriginalName();
            $fileNameExtract = explode('.',$name);
            $fileName=$fileNameExtract[0];
            $fileName.=time();
            $fileName.=$i;
            $fileName.='.';
            $fileName.=$fileNameExtract[1];
           // $file->store('product_image');
           $file->move('product_image',$fileName);
            $image[]=$fileName;
            $i++;
          
             }

         ($product['image']=implode("|",$image));
         $product->save();
            return redirect()->back()->with('message','Product SuccessFully Added');
            
        }
        else{
            echo" Fail ";
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
    public function edit(Product $product)
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('admin.product.edit',compact('product','categories','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $update = $product->update([
            'cat_id'=>$product->category,
            'subcat_id'=>$product->subcategory,
            'name'=>$product->name,
            'size'=>$product->size,
            'color'=>$product->color,
            'brand'=>$product->brand,
            'description'=>$product->description,
            'price'=>$product->price,
            'stockin'=>$product->stockin,
            'image'=>$product->image,



            
            
        ]);
        if
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $delete = $product->delete();
        if($delete){
            return redirect()->back();
        }
    }
}