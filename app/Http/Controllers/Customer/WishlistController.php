<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wish_list;
use Auth;

class WishlistController extends Controller
{
    public function add_wish_list(Request $request ,$id){
        
        $product = Product::find($id);
        $user_id = Auth::user()->id;

        Wish_list::create([
            'product_id'=>$product->id,
            'users_id'=>$user_id
        ]);
        
        alert()->success('Title','Yêu Thích Thành Công ');
        return redirect()->back();
    }

    
    public function delete_wish_list($id){
        Wish_list::where('product_id',$id)->delete();
        return redirect()->back();
    }
}
