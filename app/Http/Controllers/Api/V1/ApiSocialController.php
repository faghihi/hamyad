<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\SocialController;
use App\Http\Requests\StoreSubscribesRequest;
use App\Http\Requests\UpdateSubscribesRequest;
use App\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

#TODO
class ApiSocialController extends Controller
{

    protected $social_controller ;

    public function __construct(SocialController $item)
    {
        $this->social_controller = $item;
    }

    public function subscribe()
    {
//        Input::
        $Email = Input::get('Email');
        $sub=new Subscribe();
        $sub->email=$Email;

        $response = ['result' => '0'];
        try {
            $sub->save();
        }
        catch (\Illuminate\Database\QueryException $e) {
            return $response;
        }

        $response['result'] = 1;
        return $response;

    }

    public function contact()
    {
        $contact = Input::all();
        $response = ['result' => '0'];

        if($this->social_controller->StoreContact($contact)){
            $response['result'] = 1;
            return $response;
        }
        else{
            return $response;
        }


    }
}