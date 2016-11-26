<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreProvidersRequest;
use App\Http\Requests\UpdateProvidersRequest;
use App\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiProvidersController extends Controller
{
    # TODO
    public function index()
    {
        return Provider::all();
    }

    public function show($id)
    {
        return Provider::findOrFail($id);
    }

    public function update(UpdateProvidersRequest $request, $id)
    {
        $provider = Provider::findOrFail($id);
        $provider->update($request->all());

        return $provider;
    }

    public function store(StoreProvidersRequest $request)
    {
        $provider = Provider::create($request->all());

        return $provider;
    }

    public function destroy($id)
    {
        $provider = Provider::findOrFail($id);
        $provider->delete();

        return '';
    }
}