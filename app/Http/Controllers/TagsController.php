<?php



namespace App\Http\Controllers;



use App\Tag;

use Illuminate\Http\Request;

use App\Http\Requests\StoreTagsRequest;

use App\Http\Requests\UpdateTagsRequest;



class TagsController extends Controller

{



    /**

     * Display a listing of Tag.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $tags = Tag::all();



        return view('tags.index', compact('tags'));

    }



    /**

     * Show the form for creating new Tag.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {



        return view('tags.create', compact(''));

    }



    /**

     * Store a newly created Tag in storage.

     *

     * @param  \App\Http\Requests\StoreTagsRequest  $request

     * @return \Illuminate\Http\Response

     */

    public function store(StoreTagsRequest $request)

    {

        Tag::create($request->all());



        return redirect()->route('tags.index');

    }



    /**

     * Show the form for editing Tag.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {



        $tag = Tag::findOrFail($id);

        return view('tags.edit', compact('tag', ''));

    }



    /**

     * Update Tag in storage.

     *

     * @param  \App\Http\Requests\UpdateTagsRequest  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(UpdateTagsRequest $request, $id)

    {

        $tag = Tag::findOrFail($id);

        $tag->update($request->all());



        return redirect()->route('tags.index');

    }



    /**

     * Display Tag.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $tag = Tag::findOrFail($id);

        return view('tags.show', compact('tag'));

    }



    /**

     * Remove Tag from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $tag = Tag::findOrFail($id);

        $tag->delete();



        return redirect()->route('tags.index');

    }



    /**

     * Delete all selected Tag at once.

     *

     * @param Request $request

     */

    public function massDestroy(Request $request)

    {

        if ($request->input('ids')) {

            $entries = Tag::whereIn('id', $request->input('ids'))->get();



            foreach ($entries as $entry) {

                $entry->delete();

            }

        }

    }



}