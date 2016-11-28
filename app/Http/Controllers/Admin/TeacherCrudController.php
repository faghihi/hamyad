<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryCrudRequest as StoreRequest;
use App\Http\Requests\CategoryCrudRequest as UpdateRequest;

class TeacherCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Teacher');
        $this->crud->setRoute("admin/teacher");
        $this->crud->setEntityNameStrings('teacher', 'teachers');

        $this->crud->setColumns(['name','resume_link', 'description',
            'phone', 'email', 'background', 'education', 'work_ex', 'awards','image']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Teacher name"
        ]);
    }

    # TODO IMPORTANT REQUEST *********
    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}