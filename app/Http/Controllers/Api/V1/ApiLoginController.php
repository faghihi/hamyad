<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ApiLoginController extends Controller
{

    public function login()
    {
        $response = ['result' => '0','message'=>''];
        $email = Input::get('Email');
        $password = Input::get('Password');
        $condition=['email'=> $email, 'password'=>$password];
        $user=User::where($condition)->first();
        if(is_null($user)){
            $response['message']='user and pass mismatch';
            return $response;
        }
        else{
            $api_code=str_random(60);
            $user=User::find($user->id);
            $user->api_token=$api_code;
            try{
                $user->save();
            }
            catch ( \Illuminate\Database\QueryException $e){
                $response['message']='Token Not Created';
                return $response;
            }
            $response['Token']=$api_code;
            $response['message']='successful Login';
            $response['result']='1';
        }
        return $response;
    }
}