<?php

namespace App\Http\Controllers;
use Mail;
class EmailController extends Controller
{
    public function html_email($data,$page,$subject,$to_email,$from_email){
        $Email=$to_email;
        Mail::send('Emails.'.$page, $data, function($message) use ($Email,$subject,$from_email) {
            $message->to($Email)->subject
            ($subject);
            $message->from($from_email,'هم یاد');
        });
    }
}