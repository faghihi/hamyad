<?php
# Admin CRUD dompleted
# TODO
# delete function does not delete completely

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\AdminsCrudRequest as StoreRequest;
use App\Http\Requests\AdminsCrudRequest as UpdateRequest;

class AdminsCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Admin');
        $this->crud->setRoute("admin/admins");
        $this->crud->setEntityNameStrings('admin', 'admins');

        $this->crud->setColumns(['name','email', 'password', 'role_id']);

        $this->crud->addField(['name' => 'name', 'label' => "Admins name"]);
        $this->crud->addField(['name' => 'email', 'label' => 'Email', 'type' => 'email']);
        $this->crud->addField(['name' => 'password', 'label' => 'Password', 'type' => 'password']);

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