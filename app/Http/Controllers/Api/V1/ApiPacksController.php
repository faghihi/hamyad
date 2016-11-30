<?php

namespace App\Http\Controllers\Api\V1;

use App\Pack;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PackController;
use Illuminate\Support\Facades\Input;

class ApiPacksController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    protected $packs_controller;

    public function __construct(PackController $item)
    {
        $this->packs_controller = $item;
    }
    public function index()
    {
        return $this->packs_controller->RetrieveAll();
    }

    public function show(Pack $pack)
    {
        return $this->packs_controller->ShowSpecificPack($pack);
    }

    public function take(Pack $pack)
    {

        $period = Input::get('period');
        $discount = Input::get('discount');
        $payment = Input::get('payment');

        $StartDate=date('Y-m-d H:i:s');
        $days=$period;
        $final_time= strtotime(date("Y-m-d H:i:s", strtotime($StartDate)) . " +$days day");
        $final_time = date("Y-m-d H:i:s",$final_time);


        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();
        $response = ['result' => '0'];

        if (is_null($user)){
            return $response;
        }

        try {
            $user->pack_take()->attach($pack->id,
                ['paid'=>$payment,
                'discount_used'=>$discount,
                'start'=>$StartDate,
                'end'=>$final_time]);
        }

        catch ( \Illuminate\Database\QueryException $e){
            return $response;
        }

        $response['result'] = 1;
        return $response;
    }
}