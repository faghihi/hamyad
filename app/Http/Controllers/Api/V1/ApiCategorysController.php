<?php

namespace App\Http\Controllers\Api\V1;

use App\Category;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
//use App\Http\Controllers\CategorysController; TODO

use App\Http\Requests\StoreCategorysRequest;

use App\Http\Requests\UpdateCategorysRequest;

class ApiCategorysController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * @param Category $category
     * @return Category
     */
    public function show(Category $category)
    {
        return $category;
    }
}