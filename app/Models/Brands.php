<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use DB;

class Brands extends Model
{
    protected $fillable = ['name','status','logo','category_id'];
    use HasFactory;
    
    public function getbrands(){
        $brands =  Brands::all();
        return $brands;
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    
    public function product(){
        return $this->HasMany(Products::class);
    }
  
    
    
}
