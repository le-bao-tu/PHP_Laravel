<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class ProductColor extends Model
{
    protected $fillable = ['product_id','color_id'];
    use HasFactory;

    public function Color_id($id){
        $color_id = DB::table('ProductColor')->where('color_id', $id)->get();
        return $color_id;
    }
   
}
