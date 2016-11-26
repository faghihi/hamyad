<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\User;
use Illuminate\Http\Request;

class ApiForgotPasswordController extends Controller
{
    protected $rest_controller;

    # TODO

    public function __construct(ResetPasswordController $item)
    {
        $this->rest_controller = $item;
    }
}
