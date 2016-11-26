<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreUserActionsRequest;
use App\Http\Requests\UpdateUserActionsRequest;
use App\Tag;

use App\UserAction;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreTagsRequest;

use App\Http\Requests\UpdateTagsRequest;

class ApiUserActionsController extends Controller
{
    public function index()
    {
        return UserAction::all();
    }

    public function show($id)
    {
        return UserAction::findOrFail($id);
    }

    public function update(UpdateUserActionsRequest $request, $id)
    {
        $useraction = UserAction::findOrFail($id);
        $useraction->update($request->all());

        return $useraction;
    }

    public function store(StoreUserActionsRequest $request)
    {
        $useraction = UserAction::create($request->all());

        return $useraction;
    }

    public function destroy($id)
    {
        $useraction = UserAction::findOrFail($id);
        $useraction->delete();

        return '';
    }
}