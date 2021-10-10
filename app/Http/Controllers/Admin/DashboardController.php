<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Login\AddRequest;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        return view ('admin.pages.dashboard');
    }
    
    public function login(){
        return view('admin.pages.login.login');
      }

      public function post_login(AddRequest $request){

        if(Auth::attempt($request->only('email','password'))){
          
          return redirect()->route('admin.index');
      }else{
       return redirect()->route('admin.login')->with('ahihi','Sai Thông Tin Đăng Nhập ? ');
      
        }
      }
  
      //logout
      public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
      }
}