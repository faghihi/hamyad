<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ProviderCrudRequest as StoreRequest;
use App\Http\Requests\ProviderCrudRequest as UpdateRequest;

class ProviderCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Provider');
        $this->crud->setRoute("admin/Providers");
        $this->crud->setEntityNameStrings('provider', 'providers');

        $this->crud->setColumns(['name','description']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Provider name"
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