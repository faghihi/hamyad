<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CourseCrudRequest as StoreRequest;
use App\Http\Requests\CourseCrudRequest as UpdateRequest;

class CourseCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Course');
        $this->crud->setRoute("admin/courses");
        $this->crud->setEntityNameStrings('course', 'courses');

        $this->crud->setColumns(['name','description', 'price','image']);

        $this->crud->addField(['name' => 'name', 'label' => "Course name"]);
        $this->crud->addField(['name' => 'description', 'label' => "Description"]);
        $this->crud->addField(['name' => 'price', 'label' => "Price"]);
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