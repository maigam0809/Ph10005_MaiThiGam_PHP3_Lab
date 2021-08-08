<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function getLoginForm(){
        return view('auth/login');
    }

    public function login(Request $request){
        $data = $request->only([
            'email',
            'password',
            'remember_token',
        ]);
        // dd($data['remember_token']);

        $a = User::where('email',$data['email'])->first();
        $b = $a->email_verified_at;

        if($b !== null){
            $result = Auth::attempt($data);

            if($result === false){
                session()->flash('error','sai email or mật khẩu');
                return back();
            }
    
            $user = Auth::user();
            // dd($user);
            return redirect()->route('users.index')->with('Đăng nhập thành công');
        }else{
            session()->flash('error','Tài khoản này chưa kích hoạt.');
            return back();
        }
       
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('auth.getLoginForm');

    }
}
