<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ApiLoginController extends Controller
{

    protected $EmailController;
    public function _construct(EmailController $item)
    {
        $this->EmailController=$item;
    }
    public function login()
    {
        $response = ['result' => '0','message'=>''];
        $email = Input::get('Email');
        $password = Input::get('Password');
        $condition=['email'=> $email];
        $user=User::where($condition)->first();
        if(is_null($user)){
            $response['message']='user not exist';
            return $response;
        }
        else{
            if(!password_verify(Input::get('Password'),$user->password))
            {
                $response['message']='username and password mistmatch';
                return $response;
            }
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

    public function Vaslogin()
    {
        $response = ['result' => '0','message'=>''];
        $phone = Input::get('Phone');
        $password = Input::get('Password');
        $condition=['phone'=> $phone];
        $user=User::where($condition)->first();
        if(is_null($user)){
            $response['message']='user not exist';
            return $response;
        }
        else{
            if(!password_verify(Input::get('Password'),$user->password))
            {
                $response['message']='username and password mistmatch';
                return $response;
            }
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

    public function Fail()
    {
        $response=['result'=>'0','message'=>'authentication Needed'];
        return $response;
    }

    public function PassRenew(){
        $response=['result'=>0,'message'=>'not a user'];
        $Email=Input::get('Email');
        $user=User::where('Email',$Email)->first();
        if(!is_null($user)){
            $this->EmailController->send_email(); #TODO fix this problem
        }
        else{
            return $response;
        }
    }

}