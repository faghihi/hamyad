<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UsersOperation extends Controller
{
    // Checking the duplicate of Email on registering
//    public function CheckEmail($email)
//    {
//        $user=User::where('email',$email)->first();
//        if(!is_null($user))
//        {
//            return 0;
//        }
//        return 1;
//    }

    public function ChangePass()
    {
        if(!Input::has('Password')|| !Input::has('NewPassword')){
            return redirect('/Profile?error=noinfo');
        }
        $user=\Auth::user();
        if(!password_verify(Input::get('Password'),$user->password))
            return redirect('/Profile?error?wrongpass');
        $user->password=bcrypt(Input::get('NewPassword'));
        $user->save();
    }


    public function test($input ){
    }
}
