<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\SocialController;
use App\Http\Requests\StoreSubscribesRequest;
use App\Http\Requests\UpdateSubscribesRequest;
use App\Subscribe;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

#TODO
class ApiUsersOperationController extends Controller
{

    protected $social_controller ;

    public function __construct(SocialController $item)
    {
//        User::
        $this->social_controller = $item;
    }

    public function ChangePass()
    {
        $response = ['result' => '0'];

        if(!Input::has('Password')|| !Input::has('NewPassword')){
            return $response;
        }

        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();
        $user=User::find($user->id);

        if(!password_verify(Input::get('Password'),$user->password))
            return $response;
        $user->password=bcrypt(Input::get('NewPassword'));
        if($user->save()){
            $response['result'] = 1;
            return $response;
        }
        else
            return $response;
    }

}