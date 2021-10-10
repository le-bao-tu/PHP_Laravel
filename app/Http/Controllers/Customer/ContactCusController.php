<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use Auth;

class ContactCusController extends Controller
{
    //contact
    public function contact(Category $category){
        $list_cate = $category->getlist();
        return view('customer.pages.contact',compact('list_cate'));
    }

    public function post_contact(Request $request , Contact $contact){
        $contact = Contact::create($request->all());
        alert()->success('Title','Gửi phản hồi thành công ');
        if($contact){
            return redirect()->route('customer.home');
        }
    }
}
