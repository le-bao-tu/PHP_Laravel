<?php

namespace App\Http\Requests\Color;

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
            'name'=>'required|unique:colors',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'vui lòng nhập tên màu !',
            'name.unique'=>"tên màu $this->name đã tồn tại ! vui lòng nhập tên khác",
        ];
    }
}
