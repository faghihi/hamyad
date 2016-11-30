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
    public function store()

    {
        $input=Input::all();
        $newr=new Review();
        $newr->comment=$input['comment'];
        if(! \Auth::check()){
           return 0;
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
                try{
                    $course->reviews()->attach($newr->id);
                }
                catch ( \Illuminate\Database\QueryException $e){
                    return 0;
                }
                return 1;

            }
            elseif(Input::has('Section')){
                $section=Section::findorfail(Input::get('Section'));

                try{
                    $section->reviews()->attach($newr->id);
                }
                catch ( \Illuminate\Database\QueryException $e){
                    return 0;
                }
                return 1;
            }
        }

        return 0;

    }


    public function destroy(Review $review)
    {
        $user=\Auth::user();
        if($review->user_id==$user->id)
            $review->delete();
        else
            return 0;
        return 1;

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

