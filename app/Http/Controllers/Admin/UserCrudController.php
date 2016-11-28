<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryCrudRequest as StoreRequest;
use App\Http\Requests\CategoryCrudRequest as UpdateRequest;

class UserCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\User');
        $this->crud->setRoute("admin/user");
        $this->crud->setEntityNameStrings('user', 'users');

        $this->crud->setColumns(['name','email', 'image', 'password', 'role_id']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "User name"
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