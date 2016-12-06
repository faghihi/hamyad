<?php

namespace App\Http\Controllers;
use League\Flysystem\Exception;
use Mail;
class EmailController extends Controller
{
    public function html_email($data,$page,$subject,$to_email,$from_email){
        $Email=$to_email;
        try {
            Mail::send('Emails.'.$page, $data, function($message) use ($Email,$subject,$from_email) {
                $message->to($Email)->subject
                ($subject);
                $message->from($from_email,'هم یاد');
            });
        } catch (Exception $e) {
            if (count(Mail::failures()) > 0) {
                return 0;
            }
        }
        catch(\Swift_SwiftException $se){
            return 0;
        }
        return 1;
    }

    public function test()
    {
        if($this->html_email(array('a'=>10),'testEmail','تست ایمیل','h.faghihi15@gmail.com','h.faghihi15@gmail.com'))
            return 1;
        else
            return 0;
    }
}