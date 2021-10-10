<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['order_id','product_id','price','quantity','attr'];

    public function add($order,$cart){
        foreach($cart->content() as $value){
            OrderDetail::create([
                'order_id'=>$order->id,
                'product_id'=>$value['id'],
                'price'=>$value['price'],
                'quantity'=>$value['quantity'],
                'attr'=>$value['attr'],
            ]);
        }
    }

    //join đến bảng order 
    public function orderdetail(){
        return $this->HasMany(Order::class);
    }

    //join đến bảng product 
    public function product (){
        return $this->belongsTo(Product::class);
    }
    //join đến bảng color 
    public function color(){
        return $this->belongsTo(Color::class,'attr','id');
    }
    
}
