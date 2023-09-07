<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','cat_id','subcat_id','name','size','color','brand','description','price','stockin','image','status'];

    public function category(){
        
        return $this->belongsTo(Category::class,'cat_id');
     }
 
     public function subcategory(){
         
         return $this->belongsTo(SubCategory::class,'subcat_id');
     }
}