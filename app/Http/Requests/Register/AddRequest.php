<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        return [
            'name'=>'required|unique:users',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|unique:users',
            'password'=>'required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'vui lòng nhập tên !',
            'name.unique'=>"tên $this->name đã tồn tại ! vui lòng nhập tên khác",
            'email.required'=>"bạn chưa nhập email",
            'email.email'=>"sai định dạng email",
            'email.unique'=>"email $this->email đã tồn tại ! vui lòng chọn email khác",
            'phone.required'=>"bạn chưa nhập số điện thoại ",
            'phone.unique'=>"phone $this->phone đã tồn tại ! vui lòng nhập số khác",
            'password.required'=>"bạn chưa nhập mật khẩu",
           
        ];
    }
}
