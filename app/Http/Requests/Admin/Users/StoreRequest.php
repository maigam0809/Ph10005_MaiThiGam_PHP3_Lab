<?php

namespace App\Http\Requests\Admin\Users;

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
            'name' =>'required|min:3|max:100',
            'email' =>'required|email|unique:users,email',
            'password' =>'required|min:8|max:100',
            'address' =>'required|min:8',
            'role'=>'required|in:' . implode(',',config('common.users.role')),
            'gender'=>'required|in:' . implode(',',config('common.users.gender')),
            'image' => 'required|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages(){
        return [
            'required' =>':attribute không được để trống',
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
            'password' =>"Password",
            'address' =>"Address",
            'role' =>"Tài khoản",
            'gender' =>"Giới tính",
            'image' =>"Ảnh",

        ];
    }
}
