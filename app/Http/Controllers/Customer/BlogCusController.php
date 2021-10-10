<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Blog_cate;
use App\Models\Category;

class BlogCusController extends Controller
{
    public function blog(Blog $blog , Blog_cate $blog_cate, Category $category){
        $blog = Blog::all();
        $blog_cate = $blog_cate->topBlog();
        $list_cate = $category->getlist();
        return view('customer.pages.blog',compact('blog','blog_cate','list_cate'));
    }

    public function blog_id(Blog $blog,Blog_cate $blog_cate,Category $category, $id){
        $blog = Blog::all();
        $blog_cate = $blog_cate->getBlogCate($id);
        $list_cate = $category->getlist();
        return view('customer.pages.blog',compact('blog','blog_cate','list_cate'));
    }
}
