<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;

class Category extends Model
{
    use HasFactory;
    protected $fillable =['id','name','image','status'];

    public function subcategories(){
        return $this->hasMany(SubCategory::class,'cat_id');
    }
}