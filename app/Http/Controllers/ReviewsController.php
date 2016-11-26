<?php



namespace App\Http\Controllers;



use App\Course;
use App\Review;

use App\Section;
use Illuminate\Http\Request;

use App\Http\Requests\StoreReviewsRequest;

use App\Http\Requests\UpdateReviewsRequest;
use Illuminate\Support\Facades\Input;


class ReviewsController extends Controller

{



    /**

     * Display a listing of Review.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $reviews = Review::all();



        return view('reviews.index', compact('reviews'));

    }
    /**

     * Store a newly created Review in storage.

     *

     * @param  \App\Http\Requests\StoreReviewsRequest  $request

     * @return \Illuminate\Http\Response

     */

    public function store()

    {
        $input=Input::all();
        $newr=new Review();
        $newr->comment=$input['comment'];
        if(! \Auth::check()){
            #TODO
            # returning the message is not available
            echo " it is not possible ";
        }
        else{
            $newr->user_id=\Auth::id();
        }
        if(Input::has('teacher')){
            $newr->teacher_rate=$input['teacher'];
        }
        elseif (Input::has('course'))
        {
            $newr->course_rate=$input['course'];
        }
        elseif (Input::has('pack'))
        {
            $newr->pack_rate=$input['pack'];
        }

        if($newr->save())
        {
            if(Input::has('Course')){
                $course=Course::findorfail(Input::get('Course'));
                $course->reviews()->attach($newr->id);
            }
            elseif(Input::has('Section')){
                $section=Section::findorfail(Input::get('Section'));
                $section->reviews()->attach($newr->id);
            }

            return 1;
        }

        return 0;

    }



    /**

     * Show the form for editing Review.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {



        $review = Review::findOrFail($id);

        return view('reviews.edit', compact('review', ''));

    }



    /**

     * Update Review in storage.

     *

     * @param  \App\Http\Requests\UpdateReviewsRequest  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(UpdateReviewsRequest $request, $id)

    {

        $review = Review::findOrFail($id);

        $review->update($request->all());



        return redirect()->route('reviews.index');

    }



    /**

     * Display Review.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $review = Review::findOrFail($id);

        return view('reviews.show', compact('review'));

    }



    /**

     * Remove Review from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $review = Review::findOrFail($id);

        $review->delete();



        return redirect()->route('reviews.index');

    }



    /**

     * Delete all selected Review at once.

     *

     * @param Request $request

     */

    public function massDestroy(Request $request)

    {

        if ($request->input('ids')) {

            $entries = Review::whereIn('id', $request->input('ids'))->get();



            foreach ($entries as $entry) {

                $entry->delete();

            }

        }

    }



}

