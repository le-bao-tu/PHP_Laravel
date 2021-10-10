<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;

use Auth;
class DetailController extends Controller
{
    public function detail(Category $category,Product $product,Comment $comments ,$id){
        $list_cate = $category->getlist();
        $product = Product::find($id);
        $color = $product->getColorById($id);
        $brands = $product->brands($id);
        $comments = $comments-> comment($id);
        return view('customer.pages.detail',compact('list_cate','product','color','comments'));
    }


  
    //comment 
    public function comment(Request $request,Comment $comment){
      $comment = Comment::create([
            'users_id'=>$request->users_id,
            'product_id'=>$request->product_id,
            'question'=>$request->question,
        ]);
        return redirect()->back()->with('binhluan','Bình luận thành công ');
    }
  


}
