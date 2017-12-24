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
    public function CheckPhone($phone)
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
        if(!$this->CheckPhone($input['phone'])){
            $response['message']='Repetetive Phone';
            return $response;
        }
        $rules = array(
            'phone'=>'required|min:11|max:11'
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
                $api_code=str_random(60);
                $user=User::where('phone',$input['phone'])->first();
                $user->api_token=$api_code;
                try{
                    $user->save();
                }
                catch ( \Illuminate\Database\QueryException $e){
                    $response['error_message']='Token Not Created';
                    return $response;
                }
                $response['Token']=$api_code;
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
            \Log::error('database problem has happend : '. $e );
            return 0;
        }
        return 1;
    }

    public function setpassword(Request $request)
    {
        $response=['result'=>'0','message'=>'not successful'];
        $phone=Input::get('phone');
        $user=User::where('phone',$phone)->first();
        if($user && $request->has('api_token') && $request->has('password')){
            if($user->api_token == $request->get('api_token')){
                $user->password=bcrypt($request->get('password'));
                try{
                    $user->save();
                }
                catch ( \Illuminate\Database\QueryException $e){
                    $response['error']='database error for password change';
                    return $response;
                }
                $response['result']=1;
                $response['message']='successfully Done';
                return $response;
            }
            \Log::error('api token sent : ' . $request->get('api_token'));
            \Log::error('api token existed : ' . $user->api_token);
            $response['error']='api token not valid';
            return $response;
        }
        $response['error']='user or api token not correctly provided';
        return $response;
    }
}
