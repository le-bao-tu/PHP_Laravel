<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Mail\OrderShipped;
use Mail;
use RealRashid\SweetAlert\Facades\Aler;
use DB;

class CartController extends Controller
{
    public function show(Category $category  ,Cart $cart){
        $list_cate = $category->getlist();
       
        return view('customer.pages.show-cart',compact('list_cate'));
    }


     //thêm vào giỏ hàng 
     public function add(Request $request,Cart $cart){
        $product = Product::find($request->id);
        $cart->add($product,$request->quantity,$request->attr);
         alert()->success('Title','Mua hàng thành công ');
        return redirect()->back();
        
      }


      
    //update tất cả sp
    public function update_cart(Request $request,Cart $cart){
        $request = $request->except('_token');
        $cart->update($request);
        alert()->success('Title','Cập nhật Thành công');
        return redirect()->back();
       
    }

    //xóa sản phẩm trong giỏ hàng
    public function delete_sp($key,Cart $cart){
        $cart->delete_sp($key);
        alert()->success('Title','Xóa thành Thành công');
        return redirect()->back();
   }




    //check-out 
    public function check_out(){ 
        $list_cate = Category::all();
        
          return view('customer.pages.check-out',compact('list_cate'));
      }


      public function post_check_out(Request $request,Order $order,Cart $cart,OrderDetail $detail){
        //thêm mới vào bảng order
        $order = $order->add($request ,$cart );
        if($order){

            // thêm mới vào bảng order detail 
            $detail->add($order,$cart);

            // gửi mail 
            Mail::to($request->email)->send(new OrderShipped);
            $cart->destroy();
            alert()->success('Title','Mua Hàng Thành Công ');
            return redirect()->route('customer.home');
        }
    }

    

}
