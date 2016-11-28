<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\RoleCrudRequest as StoreRequest;
use App\Http\Requests\RoleCrudRequest as UpdateRequest;

class RoleCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Role');
        $this->crud->setRoute("admin/role");
        $this->crud->setEntityNameStrings('role', 'roles');

        $this->crud->setColumns(['title']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Role name"
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