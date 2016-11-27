<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use App\User;
use Illuminate\Http\Request;


class ApiLoginController extends Controller
{

    protected function guard(){
        return Auth::guard('api');
    }
}
