<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Auth;

class ContactController extends Controller
{
    public function contact( Contact $contact){
        $contact = $contact->getcontactlist();
        return view('admin.pages.contact.list',compact('contact'));
    }

      //delete contact
      public function delete_contact(Request $request, $id){
        Contact::where('id',$id)->delete();
        alert()->success('Title','Xóa phản hồi thành công ');
        return redirect()->back();
    }
}
