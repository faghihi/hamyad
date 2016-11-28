<?php

namespace App\Http\Controllers\Api\V1;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeachersRequest;
use App\Http\Requests\UpdateTeachersRequest;

class ApiTeachersController extends Controller
{
    public function index()
    {
        return Teacher::all();
    }

    public function show(Teacher $teacher)
    {
        return $teacher;
    }

    public function update(UpdateTeachersRequest $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());

        return $teacher;
    }

    public function store(StoreTeachersRequest $request)
    {
        $teacher = Teacher::create($request->all());

        return $teacher;
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return '';

//        Teacher::destroy($id);
    }
}