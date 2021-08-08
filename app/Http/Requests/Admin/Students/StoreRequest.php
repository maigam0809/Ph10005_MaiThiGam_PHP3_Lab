<?php

namespace App\Http\Requests\Admin\Students;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class StoreRequest extends FormRequest
{

    public function authorize()
    {
       return true;
    }


    public function rules()
    {
        return [
            'student_name' =>'required|min:3|max:100',
            'address' =>'required',
            'description' =>'required',
            'avatar' => 'required|mimes:jpeg,png,jpg|max:2048',
        ];

    }
    public function messages(){
        return [
            'required' => ':attribute không được để trống',
            'min:3' => ':atribute tối thiểu gồm 3 ký tự',
            'max:100' => ':atribute tối đa gồm 100 ký tự',
            'unique' => ':atribute đã tồn tại.',
            'max:2048' => ':atribute có size nhỏ hơn 2MB',
            'mimes'=>':attribute phải là ảnh dạng jpeg,png'
        ];
    }

    public function attributes(){
        return [
            'student_name' =>"Họ và tên ",
            'address' =>"Địa chỉ ",
            'desciption' =>"Mô tả",
            'avatar' =>"Avatar",

        ];
    }
}
