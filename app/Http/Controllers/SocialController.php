<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Subscribe;
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
    protected function validator(array $data)
    {
        return \Validator::make($data, [
            'Name' => 'required|max:255',
            'Email' => 'required|email|',
            'Message' => 'required|min:10',
        ]);
    }

    public function StoreContact($input)
    {
        if(! $this->validator($input)){
            return 0;
        }
        if(isset($input['Name'])&&isset($input['Email'])&&isset($input['Message'])){
            $message=new Contact();
            $message->name=$input['Name'];
            $message->email=$input['Email'];
            if(isset($input['Subject']))
                $message->subject=$input['Subject'];
            $message->message=$input['Message'];
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
