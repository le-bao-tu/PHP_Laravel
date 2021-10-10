<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use Auth;
use App\Models\User;
class CommentController extends Controller
{
    

    public function comments(Comment $comment){
        $comment = Comment::paginate(20);
        return view('admin.pages.comment.list',compact ('comment'));
    }


    //chi tiết comment 
    public function comments_detail( $id,Comment $comment){
        $product_cmt = $comment->product_cmt($id);
        $comment = Comment::where('id',$id)->first();
        return view('admin.pages.comment.detailcomment',compact('comment','product_cmt'));
    }


    //update comment 
    public function update_comments(Request $request,$id){

        $comment = Comment::find($request->id);

         Comment::where('id',$request->id)->update([
             'answer'=>$request->answer,
             'users_id'=>$comment->users_id,
             'product_id'=>$comment->product_id,
             'question'=>$comment->question,
             'status'=>$request->status,
            ]);
           
            alert()->success('Title','Đã trả lời ');
            return redirect()->route('comments');
    }

    //delete comments
    public function delete_comments(Request $request, $id){
        Comment::where('id',$id)->delete();
        alert()->success('Title','Xóa comment thành công ');
        return redirect()->back();
    }

}



