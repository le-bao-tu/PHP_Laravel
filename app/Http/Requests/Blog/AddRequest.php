<?php

namespace App\Http\Requests\Blog;

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
            'name'=>'required:blogs',
            'file'=>'required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'vui lòng nhập tên !',
            'name.unique'=>"tên $this->name đã tồn tại ! vui lòng nhập tên khác",
            'file.required'=>'vui lòng nhập anhr !',
        ];
    }
}
