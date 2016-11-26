<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\User;
use Illuminate\Http\Request;

class ApiForgotPasswordController extends Controller
{
    protected $forgot_controller;

    # TODO

    public function __construct(ForgotPasswordController $item)
    {
        $this->forgot_controller = $item;
    }
}
