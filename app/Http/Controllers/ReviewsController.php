<?php



namespace App\Http\Controllers;



use App\Course;
use App\Review;

use App\Section;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\StoreReviewsRequest;

use App\Http\Requests\UpdateReviewsRequest;
use Illuminate\Support\Facades\Input;


class ReviewsController extends Controller
{
    public function store(Course $course)

    {
        $input=Input::all();
        $rules = array(
            'comment' => 'required|min:10',
        );
        $messages = [
            'comment.required' => 'وارد کردن پیام شما ضروری است ',
            'comment.min' => 'حداقل ۱۰ کاراکتر برای ارسال پیام شما لازم است.',
        ];
        $validator = \Validator::make($input, $rules,$messages);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $newr=new Review();
        $newr->comment=$input['comment'];
        if(! \Auth::check()){
           return redirect()->back();
        }
        else{
            $newr->user_id=\Auth::id();
        }
        if (Input::has('course'))
        {
            $newr->course_rate=$input['course'];
            $user=\Auth::user();
            if($this->StoreRate($user,$course,$newr->course_rate)==0)
            {
                return view('errors.404');
            }
        }
        try{
            $newr->save();
        }
        catch ( \Illuminate\Database\QueryException $e){
            return view('errors.404');
        }
        try{
            $course->reviews()->attach($newr->id);
        }
        catch ( \Illuminate\Database\QueryException $e){
            return view('errors.404');
        }
        return redirect('/CourseReview/'.$course['id'].'?success=1');
    }

    public function StoreRate(User $user,Course $course,$rate)
    {
        $hasTask = $course->rates()->where('users.id', $user->id)->exists();
        if($hasTask){
            try {
                $course->rates()->updateExistingPivot($user->id,['rate'=>$rate]);
            }
            catch ( \Illuminate\Database\QueryException $e){
                return 0;
            }
            return 1;
        }
        else{
            try {
                $course->rates()->attach($user->id,['rate'=>$rate]);
            }
            catch ( \Illuminate\Database\QueryException $e){
                return 0;
            }
            return 1;
        }
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

