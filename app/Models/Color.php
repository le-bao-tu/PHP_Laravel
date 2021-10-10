<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['name','code_color'];
    use HasFactory;

    public function getcolor(){
        $color =  Color::all();
        return $color;
    }
}
