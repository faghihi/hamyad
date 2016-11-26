<?php

namespace App\Http\Controllers\Api\V1;

use App\Course;

use App\Http\Requests\StoreRolesRequest;
use App\Role;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreCoursesRequest;

use App\Http\Requests\UpdateCoursesRequest;

class ApiRolesController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Role::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Role::findOrFail($id);
    }
}
