<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name','email','note','users_id'];
    use HasFactory;

    public function user(){
        return $this->BelongsTo(User::class);
    }
    
    public function getcontactlist(){
        return Contact::orderBy('created_at','DESC')->get();
    }
}
