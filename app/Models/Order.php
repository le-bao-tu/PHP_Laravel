<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\User;
class Order extends Model
{

    use HasFactory;
    protected $fillable = ['users_id','phone','address','note','total','status'];

    public function add($request,$cart){
        $order = Order::create([
            'users_id'=>Auth::user()->id,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'note'=>$request->note,
            'total'=>$cart->get_total_price()
        ]);
        return $order;
    }

    //join đến user 
    public function user(){
        return $this->BelongsTo(User::class);
    }


    //join bangr order với orderdetail 
    public function order(){
        return $this->HasMany(OrderDetail::class);
    }
}
