<?php

namespace App\Helper;
class Cart
{
    // khia báo thuộc tính
    private $items = [];
    private $total_price = 0 ;
    private $total_quantity = 0 ;

    //định nghĩa các phương thức 
    //__construct hàm khởi tạo
    public function __construct(){
        $this->items =session('cart') ? session('cart') : [];
        
    }

    // kiểm tra sản phẩm và thuộc tính đã tồn tại trog giỏ hàng hay chưa;
    public function check($product,$attr){
        foreach($this->items as $key => $value){
            if($value['id'] == $product->id && $value['attr'] == $attr){
                return $key;
            }
        }
        return false;
    }


    //them moi
    public function add($product,$quantity,$attr){
        $item = [
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>($product->sale_price > 0) ? $product->sale_price : $product->price,
            'image'=>$product->image,
            'quantity'=>$quantity,
            'attr'=>$attr,
            'product'=>$product
        ];

        $check = $this->check($product,$attr);
        if(!$this->check($product,$attr)){

            $this->items[$product->id.$attr] = $item;
          
        }else{
            $this->items[$check]['quantity'] += $quantity;
        }
        
        session(['cart'=>$this->items]);
    }


    //cập nhật sản phẩm trong giỏ hàng 
    public function content(){
        return $this->items;
    }

    public function update($request){
      foreach($request['key'] as $key => $value){
          foreach($this->items as $key2 => $item){
                if($key2 == $request['key'][$key]){
                    $this->items[$key2]['quantity'] = $request['quantity'][$key];
                    $this->items[$key2]['attr'] = $request['attr'][$key];
                }
             }
         }

         session(['cart'=>$this->items]);
    }

    // tính tổng tiền sản phẩm 
    public function get_total_price(){
        foreach($this->items as $value){
            $this->total_price += $value['quantity'] *  $value['price'];
        }
        return $this->total_price;
    }

    //lấy ra tổng sản phẩm trong giỏi hàng
    public function get_total_quantity(){
        foreach($this->items as $value){
            $this->total_quantity += $value['quantity'];

        }
        return $this->total_quantity;
    }
    

     //xóa sản phẩm trong giỏ hàng 
     public function delete_sp($key){
        if(isset($this->items[$key])){
            unset($this->items[$key]);
            session(['cart'=>$this->items]);
        }
        
    }

    //xóa sp ở giỏ hnag sau khi check-out 
    public function destroy(){
        session()->forget('cart');
    }
   
}