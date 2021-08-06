<?php

namespace App\Http\Requests\Admin\Students;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class UpdateRequest extends FormRequest
{

    public function rules()
    {
        return [
            'student_name' =>'required|min:3|max:100',
            'address' =>'required',
            'description' =>'required',
        ];

    }
    public function messages(){
        return [
            'required' => ':attribute không được để trống',
            'min:3' => ':atribute tối thiểu gồm 3 ký tự',
            'max' => ':atribute tối đa gồm 100 ký tự',
            'unique' => ':atribute đã tồn tại.',
        ];
    }

    public function attributes(){
        return [
            'student_name' =>"Họ và tên ",
            'address' =>"Địa chỉ ",
            'desciption' =>"Mô tả",
        ];
    }
}
