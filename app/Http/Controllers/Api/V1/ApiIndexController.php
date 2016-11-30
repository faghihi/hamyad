<?php

namespace App\Http\Controllers\Api\V1;

use App\Course;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Input;


class ApiIndexController extends Controller
{
    protected $index_controller;

    public function __construct(IndexController $item)
    {
        $this->index_controller = $item;
    }

    public function index()
    {
        $restore = $this->index_controller->RetrieveData();

        $restore['teacher'] = $this->index_controller->Teachers();

        return $restore;
    }
}
