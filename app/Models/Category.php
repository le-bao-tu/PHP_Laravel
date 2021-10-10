<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    protected $fillable = ['name','status','logo'];
    use HasFactory;

    public function getlist(){
        $category = Category::all();
        return $category;
    }

    
    public function product(){
        return $this->belongsTo(Products::class);
    }


    public function pro(){
        return $this->HasMany(Product::class);
    }
}
