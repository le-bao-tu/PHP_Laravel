<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Register\AddRequest;
use App\Http\Requests\Register\LoginRequest;
use Hash;
use Auth;
class SpostController extends Controller
{
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
            echo "đăng nhap that bai";
        }
    }

    public function log_out(){
        Auth::logout();
        return redirect()->route('customer.home');
    }
}
