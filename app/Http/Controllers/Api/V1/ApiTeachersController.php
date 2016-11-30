<?php

namespace App\Http\Controllers\Api\V1;

use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class ApiTeachersController extends Controller
{
    protected $teachers_controller;

    public function __construct(TeachersController $item)
    {
        $this->teachers_controller = $item;
    }

    public function index()
    {
        return $this->teachers_controller->RetrieveData();
    }

    public function show(Teacher $teacher)
    {
        return $this->teachers_controller->ShowSpecific($teacher);
    }

    public function rate(Teacher $teacher)
    {
        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();

        $response = ['result' => '0'];
        $rate = Input::get('rate');

        if (!is_null($user) && $this->teachers_controller->StoreRate($user, $teacher, $rate)){

            $response['result'] = 1;
            return $response;
        }
        else {
            return $response;
        }
    }

}