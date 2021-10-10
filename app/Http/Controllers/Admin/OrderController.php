<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function order (Request $request){
        $order = Order::all();
        return view('admin.pages.order.list',compact('order'));
    }

    
    //chi tiết đơn hàng 
    public function order_detail($id){  
        $Order = Order::find($id);
        $product = OrderDetail::where('order_id',$id)->get();
        
        return view('admin.pages.order.orderdetail',compact('Order','product'));
    }


    
    //capnhat sp oederdetail
    public function update(Request $request,Order $order,$id){
        if($_POST['status']){
            Order::find($id)->update($request->all());
        }
        alert()->success('Title','Cập nhật thành công ');
        return redirect()->route('order');
    }

    //xóa đơn hàng trong order 
    public function delete_sp(Request $request,$id){
        Order::where('order_id',$id)->delete();
        OrderDetail::where('order_id',$id)->delete();
        alert()->success('Title','Xóa đơn hàng thành công ');
        return redirect()->back();
    }
}
