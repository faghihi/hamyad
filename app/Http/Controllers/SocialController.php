<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Subscribe;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SocialController extends Controller
{

    public function Subscribe()
    {
        $Email = Input::get('Email');
        $sub=new Subscribe();
        $sub->email=$Email;
        try{
            $sub->save();
        }
        catch ( \Illuminate\Database\QueryException $e){
            return 0;
        }
        return 1;
    }

    public function StoreContact($input)
    {
        $rules = array(
            'Name' => 'Required|Min:3|Max:80',
            'Email'     => 'Required|Between:3,64|Email',
            'Message' => 'Required|Min:10'
        );

        $validator = Validator::make($input, $rules);
        if (! $validator->fails()) {
            $message = new Contact();
            $message->name = $input['Name'];
            $message->email = $input['Email'];
            if (isset($input['Subject']))
                $message->subject = $input['Subject'];

            $message->message = $input['Message'];
            try{
                $message->save();
            }
            catch ( \Illuminate\Database\QueryException $e){
                return 0;
            }
            return 1;
        }
        return 0;
    }
    public function Contact(){
        $input=Input::all();
        $this->StoreContact($input);
    }


}
