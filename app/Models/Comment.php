<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
use App\Models\User;

class Comment extends Model
{
    protected $fillable = ['users_id','product_id','question','status'];
    use HasFactory;

    
    public function comment($id){
        $comment = DB::table('users')->join('comments','users.id','=','comments.users_id')->where('comments.product_id',$id)->get();
        return $comment;
    }

    //join để lấy ra tên người dùng comment 
    public function user_id($id){
        $comment = DB::table('users')->join('comments','users.id','=','comments.users_id')->where('comments.id',$id)->first();
        return $comment;
    }
    

    //join để lấy ra chi tiết sản phẩm comment 
    public function product_cmt($id){
        $comment = DB::table('comments')->join('products','products.id','=','comments.product_id')->where('comments.id',$id)->first();
        return $comment;
    }

 

}
