<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_cate extends Model
{
    protected $fillable = ['name','image','note','blog_id'];
    use HasFactory;
    public function blog(){
        return $this->belongsTo(Blog::class);
    }

    public function topBlog(){
        $top_blog = Blog_Cate::orderBy('created_at','DESC')->get();
        return $top_blog;
    }

    public function getBlogCate($id){
        $blog_id = Blog_Cate::where('blog_id',$id)->orderBy('created_at','DESC')->get();
        return $blog_id;
    }
}
