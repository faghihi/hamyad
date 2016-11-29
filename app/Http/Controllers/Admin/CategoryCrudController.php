<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CategoryController;
use App\Http\Requests\CategoryCrudRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\CategoryCrudRequest as StoreRequest;
use App\Http\Requests\CategoryCrudRequest as UpdateRequest;

class CategoryCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Category');
        $this->crud->setRoute("admin/Categories");
        $this->crud->setEntityNameStrings('category', 'categories');

        $this->crud->setColumns(['name','description','icon']);

        $this->crud->addField(['name' => 'name', 'label' => "Category name"]);
        $this->crud->addField(['name' => 'description', 'label' => "Description"]);
        $this->crud->addField(['name' => 'icon', 'label' => "Icon"]);

    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}