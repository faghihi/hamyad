<?php

namespace App\Http\Controllers\Api\V1;

use App\Pack;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiPacksController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Pack::all();
    }

    /**
     * @param Pack $pack
     * @return Pack
     */
    public function show(Pack $pack)
    {
//        return Pack::findOrFail($id);
        return $pack;
    }
}