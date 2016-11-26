<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiUsersController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(UpdateUsersRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return $user;
    }

    public function store(StoreUsersRequest $request)
    {
        $user = User::create($request->all());

        return $user;
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return '';
    }
}