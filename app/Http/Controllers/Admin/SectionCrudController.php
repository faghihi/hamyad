<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SectionCrudRequest as StoreRequest;
use App\Http\Requests\SectionCrudRequest as UpdateRequest;

class SectionCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Section');
        $this->crud->setRoute("admin/Sections");
        $this->crud->setEntityNameStrings('section', 'sections');

        $this->crud->setColumns(['name','description','link','part','time','course_id','image']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Section name"
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