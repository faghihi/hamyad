<?php

namespace App;


use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;
use App\Http\Controllers\EmailController;

class ActivationService
{

    protected $mailer;

    protected $activationRepo;

    protected $resendAfter = 0;
    protected $Email;

    public function __construct(Mailer $mailer, ActivationRepository $activationRepo,EmailController $Email1)
    {
        $this->mailer = $mailer;
        $this->activationRepo = $activationRepo;
        $this->Email=$Email1;
    }

    public function sendActivationMail($user)
    {

        if ($user->activated || !$this->shouldSend($user)) {
            return;
        }

        $token = $this->activationRepo->createActivation($user);

        $link = route('user.activate', $token);
        $message ="Activate you Account : $link";
//        try{
//            $this->mailer->send($message, function (Message $m) use ($user) {
//                $m->to($user->email)
//                    ->subject(\Config::get('email.activation'))
//                    ->from(\Config::get('email.email_send'),\Config::get('email.name'));
//            });
//        }
//        catch(\Swift_SwiftException $se){
//            return 0;
//        }
        $this->Email->send_email(array('link'=>$link),'Activation',\Config::get('email.activation'),$user->email);
    }

    public function activateUser($token)
    {
        $activation = $this->activationRepo->getActivationByToken($token);

        if ($activation === null) {
            return null;
        }

        $user = User::find($activation->user_id);

        $user->activated = true;

        $user->save();

        $this->activationRepo->deleteActivation($token);

        return $user;

    }

    private function shouldSend($user)
    {
        $activation = $this->activationRepo->getActivation($user);
        return $activation === null || strtotime($activation->created_at) + 60 * 60 * $this->resendAfter < time();
    }

}