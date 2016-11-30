<?php

namespace App\Http\Controllers\Api\V1;

use App\Course;
use App\Review;

use App\Section;
use App\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Input;
use Mockery\CountValidator\Exception;

class ApiReviewsController extends Controller
{
    protected $reviews_controller;

    /**
     * ApiReviewsController constructor.
     * @param ReviewsController $item
     */
    public function __construct(ReviewsController $item)
    {
        $this->reviews_controller = $item;
    }

    public function update(UpdateReviewsRequest $request, $id)
    {
        $review = Review::findOrFail($id);
        $review->update($request->all());

        return $review;
    }

    public function store()
    {
        $response = ['result' => 0];
        $input=Input::all();
        $newr=new Review();
        $newr->comment=$input['comment'];

        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();

        if (is_null($user)){
            return $response;
        }
        else {
            $newr->user_id=$user->id;
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
                    return $response;
                }
                $response['result'] = 1;

            }
            elseif(Input::has('Section')){
                $section=Section::findorfail(Input::get('Section'));

                try{
                    $section->reviews()->attach($newr->id);
                }
                catch ( \Illuminate\Database\QueryException $e){
                    return $response;
                }
                $response['result'] = 1;
            }
            return $response;
        }
        return $response;
    }

    public function destroy(Review $review)
    {
        $response = ['result' => '0'];

        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();

        if (!is_null($user) && $review->user_id == $user->id){
            $review->delete();
            $response['result'] = 1;
            return $response;
        }
        else {
            return $response;
        }
    }
}