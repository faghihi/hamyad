<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SocialController extends Controller
{

    public function subscribe()
    {
        $Email = Input::get('Email');
        $sub=new Subscribe();
        $sub->email=$Email;
        if(!$sub->save())
        {
            return 0;
        }
        return 1;
    }

    public function Contact(){

    }


}
