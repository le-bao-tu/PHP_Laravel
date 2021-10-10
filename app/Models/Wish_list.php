<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish_list extends Model
{
    protected $fillable = ['users_id','product_id'];
    use HasFactory;

    
    public function product(){
        return $this->belongsTo(Products::class);
    }
}
