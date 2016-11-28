<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SubscribeCrudRequest as StoreRequest;
use App\Http\Requests\SubscribeCrudRequest as UpdateRequest;

class SubscribeCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Subscribe');
        $this->crud->setRoute("admin/subscribe");
        $this->crud->setEntityNameStrings('subscribe', 'subscribes');

        $this->crud->setColumns(['email']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Subscribe name"
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