<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiConfigController extends Controller
{
    public function getconfigs()
    {
        $response=[];
        $response['prefix']=\Config::get('store.storagepath');

        return $response;

    }
}
