<?php

namespace App\Http\Requests\BlogCate;

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
            'note'=>'required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'vui lòng nhập tên !',
            'name.unique'=>"tên $this->name đã tồn tại ! vui lòng nhập tên khác",
            'note.required'=>'vui lòng nhập mô tả  !',
        ];
    }
}
