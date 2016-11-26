<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use App\User;
use Illuminate\Http\Request;

class ApiLoginController extends Controller
{
    protected $login_controller;

    # TODO

    public function __construct(LoginController $item)
    {
        $this->login_controller = $item;
    }

    public function authenticated(Request $request, User $user)
    {
        return $this->login_controller->authenticated($request, $user);
    }

    public function activateUser($token)
    {
        return $this->activateUser($token);
    }
}
