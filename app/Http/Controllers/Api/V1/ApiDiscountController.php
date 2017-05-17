<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\DiscountController;
use App\Subscribe;
use Validator;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ApiDiscountController extends Controller
{

    protected $DiscountController ;

    public function __construct(DiscountController $item)
    {
        $this->DiscountController = $item;
    }

    public function discunt_compute()
    {
        $response = ['result' => 0];
        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();

        if (is_null($user)){
            return $response;
        }
        if(Input::has('Price') && Input::has('Code'))
        {
            $response=$this->DiscountController->Make_discount(Input::get('Price'),Input::get('Code'));
            $response['result']=1;
            return $response;
        }
        else{
            return $response;
        }
    }
}