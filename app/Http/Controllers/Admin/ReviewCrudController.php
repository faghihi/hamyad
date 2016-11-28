<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryCrudRequest as StoreRequest;
use App\Http\Requests\CategoryCrudRequest as UpdateRequest;

class ReviewCrudController extends CrudController {

    public function setup() {
        $this->crud->setModel('App\Review');
        $this->crud->setRoute("admin/review");
        $this->crud->setEntityNameStrings('review', 'reviews');

        $this->crud->setColumns(['comment','teacher_rate', 'pack_rate','user_id', 'course_rate']);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Review name"
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