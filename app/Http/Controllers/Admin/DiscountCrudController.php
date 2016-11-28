<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryCrudRequest as StoreRequest;
use App\Http\Requests\CategoryCrudRequest as UpdateRequest;

class DiscountCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Discount');
        $this->crud->setRoute("admin/discount");
        $this->crud->setEntityNameStrings('discount', 'discounts');

        $this->crud->setColumns(['code','type', 'value','count']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Discount name"
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