<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Rules\RuleEmailUnique;
class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' =>'required|min:3|max:100',
            'email' =>[

                'required',
                'email',
                new RuleEmailUnique(),
            ],
            'address' =>'required|min:8',
            'role'=>'required|in:' . implode(',',config('common.users.role')),
            'gender'=>'required|in:' . implode(',',config('common.users.gender')),
            'image1' => 'image|max:2048',
        ];
    }

    public function messages(){
        return [
            'required' =>':attribute không được để trống',
            'name.min' => ':attribute tối thiểu gồm 3 ký tự',
            'max' => ':attribute tối đa gồm 100 ký tự',
            'in' => ':attribute giá trị không đúng',
            'email' => ':attribute không đúng dạng email.',
            'unique' => ':attribute đã tồn tại.',
            'max:2048' => ':atribute có size nhỏ hơn 2MB',
            'mimes'=>':attribute phải là ảnh dạng jpeg,png'
        ];
    }

    public function attributes(){
        return [
            'name' =>"Họ Tên ",
            'email' =>"Email",
            'address' =>"Address",
            'role' =>"Tài khoản",
            'gender' =>"Giới tính",
            'image1' =>"Ảnh",

        ];
    }
}
