<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classify extends Model
{
    protected $fillable = ['name','status','category_id'];
    use HasFactory;

    public function getclassify(){
        $classify =  Classify::all();
        return $classify;
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function product(){
        return $this->BelongsTo(Product::class);
    }

}
