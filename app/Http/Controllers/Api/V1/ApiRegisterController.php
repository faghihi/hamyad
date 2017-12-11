<?php

namespace App\Http\Controllers\Api\V1;

use App\User;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\ActivationService;

class ApiRegisterController extends Controller
{
    public function CheckEmail($phone)
    {
        $user=User::where('phone',$phone)->first();
        if(!is_null($user))
        {
            return 0;
        }
        return 1;
    }
    public function Register()
    {
        $response=['result'=>'0','message'=>''];
        $input=Input::all();
        if(!$this->CheckEmail($input['email'])){
            $response['message']='Repetetive Email';
            return $response;
        }
        $rules = array(
            'name' => 'required|max:255|min:5',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
            'phone'=>'required|min:12|max:12'
        );
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            $response['message']='email or name or phone or pass not sufficient';
            return $response;
        }
        else{
            if($this->StoreRegister($input)){
                $response['result']=1;
                $response['message']='User Created';
                return $response;
            }
            else{
                $response['message']='unable to create user';
                return $response;
            }
        }
    }

    public function VasRegister()
    {
        $response=['result'=>'0','message'=>''];
        $input=Input::all();
        if(!$this->CheckEmail($input['Phone'])){
            $response['message']='Repetetive Phone';
            return $response;
        }
        $rules = array(
            'phone'=>'required|min:12|max:12'
        );
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            $response['message']=' phone not sufficient';
            return $response;
        }
        else{
            if($this->StoreRegister($input)){
                $response['result']=1;
                $response['message']='User Created';
                return $response;
            }
            else{
                $response['message']='unable to create user';
                return $response;
            }
        }
    }

    public function StoreRegister($input)
    {
        $user=new User();
        $key=['phone'];
        foreach ($key as $k){
            $user->$k=$input[$k];
            $user->activated=1;
        }
        try{
            $user->save();
        }
        catch ( \Illuminate\Database\QueryException $e){
            return 0;
        }
        return 1;
    }

    public function setpassword()
    {
        $phone=Input::get('phone');
        $user=User::where('phone',$phone)->first();
        if($user){
            $user->password=bcrypt(Input::get('password'));
            try{
                $user->save();
            }
            catch ( \Illuminate\Database\QueryException $e){
                return 0;
            }
            return 1;
        }
        return 0;

    }
}
