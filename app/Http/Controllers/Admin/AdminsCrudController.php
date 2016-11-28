<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AdminsCrudRequest as StoreRequest;
use App\Http\Requests\AdminsCrudRequest as UpdateRequest;

class AdminsCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Admin');
        $this->crud->setRoute("admin/admins");
        $this->crud->setEntityNameStrings('admin', 'admins');

        $this->crud->setColumns(['name','email', 'password', 'role_id']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Admins name"
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