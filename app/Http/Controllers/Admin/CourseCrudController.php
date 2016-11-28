<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryCrudRequest as StoreRequest;
use App\Http\Requests\CategoryCrudRequest as UpdateRequest;

class CourseCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Course');
        $this->crud->setRoute("admin/course");
        $this->crud->setEntityNameStrings('course', 'courses');

        $this->crud->setColumns(['name','description', 'price','image']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Course name"
        ]);
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