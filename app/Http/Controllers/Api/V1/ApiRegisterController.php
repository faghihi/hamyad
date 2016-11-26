<?php

namespace App\Http\Controllers\Api\V1;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\ActivationService;

class ApiRegisterController extends Controller
{

    protected $register_controller;

    public function __construct(RegisterController $item)
    {
        $this->middleware('guest');
        $this->register_controller = $item;
    }


    protected function validator(array $data)
    {
        return $this->register_controller->validator($data); # TODO
    }

    public function register(Request $request)
    {
        return $this->register_controller->register($request);
    }


    protected function create(array $data)
    {
        return $this->register_controller->create($data);
    }
}
