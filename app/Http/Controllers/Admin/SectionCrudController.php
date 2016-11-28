<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryCrudRequest as StoreRequest;
use App\Http\Requests\CategoryCrudRequest as UpdateRequest;

class SectionCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Section');
        $this->crud->setRoute("admin/section");
        $this->crud->setEntityNameStrings('section', 'sections');

        $this->crud->setColumns(['name','description','link','part','time','course_id','image']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Role name"
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