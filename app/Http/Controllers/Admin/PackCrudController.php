<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryCrudRequest as StoreRequest;
use App\Http\Requests\CategoryCrudRequest as UpdateRequest;

class PackCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Pack');
        $this->crud->setRoute("admin/pack");
        $this->crud->setEntityNameStrings('pack', 'packs');

        $this->crud->setColumns(['title','price_day', 'price_month','price_year','image']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Pack name"
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