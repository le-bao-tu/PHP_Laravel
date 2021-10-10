<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrands extends Model
{   
    protected $fillable = ['product_id','brands_id','created_at','updated_at'];
    use HasFactory;

   

}
