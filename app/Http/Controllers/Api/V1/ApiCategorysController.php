<?php

namespace App\Http\Controllers\Api\V1;

use App\Category;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;

use App\Http\Requests\StoreCategorysRequest;

use App\Http\Requests\UpdateCategorysRequest;

class ApiCategorysController extends Controller
{
    /**
     */
    protected $categorys_controller;
    public function __construct(CategoryController $item)
    {
            $this->categorys_controller = $item;
    }

    public function index()
    {
        return $this->categorys_controller->RetrieveCategories();
    }

    /**
     * @param Category $category
     * @return Category
     */
    public function show(Category $category)
    {
        return $this->categorys_controller->ShowSpecificCategories($category);
    }
}