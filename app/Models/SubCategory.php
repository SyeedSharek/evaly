<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['id','cat_id','name','status'];
    
    public function category(){
        
        return $this->belongsTo(Category::class,'cat_id');
    }
}