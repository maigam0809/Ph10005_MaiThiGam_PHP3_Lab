<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;
class RuleEmailUnique implements Rule
{
    public function __construct(){
    }


    public function passes($attribute, $newEmail)
    {
        $oldEmail =request()->user->email;

        if($newEmail === $oldEmail){
            return true;
        }
        
        $kiemTra = User::where('email',$newEmail)->count();

        if($kiemTra > 0){
            return false;
        }
        return true;
    }

    public function message()
    {
        return 'Email này đã tồn tại.';
    }
}
