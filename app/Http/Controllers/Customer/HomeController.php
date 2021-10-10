<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Register\AddRequest;
use App\Http\Requests\Register\LoginRequest;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Blog_cate;
use Hash;
use Auth;

class HomeController extends Controller
{
    //lấy ra nhưng sản phẩm mới nhất 
    public function home(Category $category ,Product $product){
        $list_cate = $category->getlist();
        $product = $product->topPro();
        return view('customer.pages.home',compact('list_cate','product'));
    }


    //đăng kí 
    public function register(){
        
        return view ('customer.pages.register');
    }

    public function post_register( AddRequest $request){
      
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->route('customer.logen');
    }

     //Đăng nhập 
     public function logen(){
        return view('customer.pages.login');
    }

    
    public function post_logen(LoginRequest $request){

        if(Auth::attempt($request->only('email','password'))){
             
            if($request->page == 'check_out'){
                return redirect()->route('check_out');
            }else{
                return redirect()->route('customer.home');
            }
        }else{
           return redirect()->route('customer.logen')->with('hi','Đăng nhập thất bại !');
        }
    }

    public function log_out(){
        Auth::logout();
        return redirect()->route('customer.home');
    }

    


}
