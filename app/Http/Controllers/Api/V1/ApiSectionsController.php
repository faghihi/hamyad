<?php

namespace App\Http\Controllers\Api\V1;

use App\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SectionsController;

# TODO
use App\Http\Requests\StoreSectionsRequest;
use App\Http\Requests\UpdateSectionsRequest;

class ApiSectionsController extends Controller
{
    protected $sections_controller ;

    public function __construct(Section $item)
    {
        $this->sections_controller = $item;
    }

    public function index()
    {
        return Section::all();
    }

    public function show(Section $section)
    {
        return $section;
    }

    public function update(UpdatePacksRequest $request, $id)
    {
        $section = Section::findOrFail($id);
        $section->update($request->all());

        return $section;
    }

    public function store(StoreSectionsRequest $request)
    {
        $section = Section::create($request->all());

        return $section;
    }

    public function destroy($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();

        return '';
    }
}