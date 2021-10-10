<?php

namespace App\Http\Requests\Product;

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
            'name'=>'required|unique:products',
            'price'=>'required',
            'sale_price'=>'required',
            'description'=>'required',
          
            
        ];
    }
    public function messages(){
        return [
            'name.required'=>'vui lòng nhập tên',
            'name.unique'=>"tên $this->name đã tồn tại ! vui lòng nhập tên khác",
            'price.required'=>"Bạn chưa nhập giá",
            'sale_price.required'=>"Bạn chưa nhập giá khuyến mãi",
            'description.required'=>"bạn chưa nhập mô tả sản phẩm",
          
        ];
    }
}
