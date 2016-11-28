<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryCrudRequest as StoreRequest;
use App\Http\Requests\CategoryCrudRequest as UpdateRequest;

class UserActionsCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\UserAction');
        $this->crud->setRoute("admin/useraction");
        $this->crud->setEntityNameStrings('useraction', 'useractions');

        $this->crud->setColumns(['action','action_model', 'action_id', 'user_id']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "User Action name"
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