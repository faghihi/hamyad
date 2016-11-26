<?php

namespace App\Http\Controllers;

use App\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\StoreAdminsRequest;

use App\Http\Requests\UpdateAdminsRequest;

class AdminsController extends Controller
{

    /**
     * Display a listing of Admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }

    /**
     * Show the form for creating new Admin.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()

    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];
        return view('admins.create', compact('') + $relations);
    }

    /**
     * Store a newly created Admin in storage.
     *
     * @param  \App\Http\Requests\StoreAdminsRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreAdminsRequest $request)
    {
        Admin::create($request->all());

        return redirect()->route('admins.index');
    }

    /**
     * Show the form for editing Admin.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $admin = Admin::findOrFail($id);
        return view('admins.edit', compact('admin', '') + $relations);
    }

    /**
     * Update Admin in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateAdminsRequest $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $admin->update($request->all());

        return redirect()->route('admins.index');

    }



    /**

     * Display Admin.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $relations = [

            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),



        ];



        $admin = Admin::findOrFail($id);

        return view('admins.show', compact('admin') + $relations);

    }



    /**

     * Remove Admin from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $admin = Admin::findOrFail($id);

        $admin->delete();



        return redirect()->route('admins.index');

    }



    /**

     * Delete all selected Admin at once.

     *

     * @param Request $request

     */

    public function massDestroy(Request $request)

    {

        if ($request->input('ids')) {

            $entries = Admin::whereIn('id', $request->input('ids'))->get();



            foreach ($entries as $entry) {

                $entry->delete();

            }

        }

    }



}