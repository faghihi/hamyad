<?php

namespace App\Http\Controllers\Api\V1;

use App\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiDiscountsController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Discount::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Discount::findOrFail($id);
    }
}