<?php

namespace App\Http\Controllers\Api\V1;

use App\Course;

use App\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Input;


class ApiCoursesController extends Controller
{
    protected $courses_controller ;

    /**
     * ApiCoursesController constructor.
     * @param CoursesController $item
     */
    public function __construct(CoursesController $item)
    {
        $this->courses_controller = $item;
    }


    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # in create items
        return $this->courses_controller->RetrieveCourses();

    }

    public function show(Course $course,Request $request)
    {
        $response['result']=1;
        $course = $this->courses_controller->ShowSpecificCourse($course);
        if($request->has('api_token')){
            $n = Input::get('api_token');
            $user = User::where('api_token', $n)->first();
            if (is_null($user)){
                $response['result']=0;
                $response['message']='user not found';
                return $response;
            }
            if($user->courses_process()->where('courses.id',$course->id)->first()){
                $course['section_passed']=$user->courses_process()->where('courses.id',$course->id)->first()->pivot->section_passed;
                $course['closed']=$user->courses_process()->where('courses.id',$course->id)->first()->pivot->closed;
            }
            else{
                $course['section_passed']=-1;
                $course['closed']=0;
            }
            if($user->likes()->where('course_id',$course->id)->first()){
                $course['liked']=1;
            }
            else{
                $course['liked']=0;
            }
            if($user->bookmarks()->where('course_id',$course->id)->first()){
                $course['bookmarked']=1;
            }
            else{
                $course['bookmarked']=0;
            }
        }
        $response['data']=$course;
        return $response;
    }

    public function search()
    {
        $input = Input::all();
        $tagnumber = 0;

        $response = ['valid' => 'false'];

        while (Input::has('tag' . $tagnumber)) {
            $input['tag'.$tagnumber]=strtolower($input['tag'.$tagnumber]);
            $input['tag'.$tagnumber]=ucfirst($input['tag'.$tagnumber]);
            $tagnumber++;
        }
        $result=array();
        $list=array();
        $list[]=0;
        for($i=0;$i<$tagnumber;$i++){
            $courses = Course::where('condition','1')->whereHas('tags', function ($query)use($input,$i) {
                $query->where('tag_name', 'like', $input['tag'.$i]);
            })->get();
            foreach ($courses as $course){
//                echo $course->name." ";
                $course['Teachers']="";
                $counter=0;
                foreach ($course->teachers as $teacher){
                    if($counter)
                        $course['Teachers']=$course['Teachers'].",".$teacher->name;
                    else
                        $course['Teachers']=$teacher->name;
                    $counter++;
                }
                $rate_count=0;
                $rate_value=0;
                foreach ($course->rates as $rate){
                    $rate_count++;
                    $rate_value +=$rate->pivot->rate;
                }
                $count=0;
                $std_count=0;
                foreach ($course->users_take as $user){
                    $std_count++;
                }
                $course['std_count']=$std_count;
                $time=0;
                foreach ($course->section as $section){
                    $count++;
                    $time+=$section->time;
                }
                $course['sections_time']=$time;
                $course['sections_count']=$count;
                $course['rates_value']=$rate_value;
                $course['rates_count']=$rate_count;
                $counter=$course->category->name;
                if(!in_array($course->id,$list)){
                    $result[]=$course;
                    $list[]=$course->id;
                }
            }
        }
        $category_list=array();
        $catnumber = 0;
        while (Input::has('cat' . $catnumber)) {
            $category_list[]=$input['cat'.$catnumber];
            $catnumber++;
        }
        if($tagnumber==0){
            return $response;
        }
        else {
            $response['valid'] = 'true';
        }
        if($catnumber==0)
        {
            $response['result'] = $result;
            return $response;
        }
        else {
            $Data = array();
            foreach ($result as $item) {
                if (in_array($item->category->name, $category_list)) {
                    $Data[] = $item;
                }
            }
            $response['result'] = $Data;
            return $response;
        }
    }

    public function ShowReviews(Course $course)
    {
        $reviews=$course->reviews()->where('enable',1)->paginate(5);
        foreach ($reviews as $review){
            $user=User::findorfail($review->user_id);
            $review['user_name']=$user->name;
            $review['user_image']=$user->image;
            $varr= json_decode(json_encode($review), true);
            foreach ($varr as $k=>$v)
            {
                if(!in_array($k,\Config::get('restrict.Review'))){
                    unset($review->$k);
                }
            }
        }

        return $reviews;
    }

    public function AddCourse(Course $course)
    {

//        $number = Input::get('amount');
        $number = 0;
//        $discount = Input::get('discount');
        $discount = null;
        $response = ['result' => '0'];

        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();

        if (is_null($user)){
            return $response;
        }
        try {
            $user->courses_take()->attach($course->id , ['paid' => $number, 'discount_used' => $discount]);
            $user->courses_process()->attach($course->id , ['section_passed' =>0, 'closed' => false]);

        }
        catch ( \Illuminate\Database\QueryException $e){
            return $response;
        }

        $response['result'] = 1;
        return $response;
    }

    public function UpdateProgressCourse(Course $course)
    {
        $response = ['result' => '0'];
        $section = Input::get('section');
        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();

        if (is_null($user)){
            return $response;
        }

        if(count($course->section)<=$section+1){
            try {
                $user->courses_process()->updateExistingPivot($course->id , ['section_passed' =>count($course->section)-1, 'closed' => true]);
            }
            catch ( \Illuminate\Database\QueryException $e){
                return $response;
            }
        }
        else{
            try {
                $user->courses_process()->updateExistingPivot($course->id , ['section_passed' =>$section, 'closed' => false]);

            }
            catch ( \Illuminate\Database\QueryException $e){
                return $response;
            }
        }

        $response['result'] = 1;
        return $response;
    }

    public function AddFave(Course $course)
    {
        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();

        $response = ['result' => '0'];
        if($user->bookmarks()->where('courses.id',$course->id)->first()){
            try {
                $user->bookmarks()->detach($course->id);
            }

            catch ( \Illuminate\Database\QueryException $e){
                return $response;
            }
            $response['message']='detached';
        }
        else{
            try {
                $user->bookmarks()->attach($course->id);
            }

            catch ( \Illuminate\Database\QueryException $e){

                return $response;
            }
            $response['message']='attached';
        }

        $response['result'] = 1;
        return $response;
    }
    public function Like(Course $course)
    {
        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();

        $response = ['result' => '0'];
        if($user->likes()->where('courses.id',$course->id)->first()){
            try {
                $user->likes()->detach($course->id);
            }
            catch ( \Illuminate\Database\QueryException $e){
                \Log::error('like error : '. $e);
                return $response;
            }
            $response['message']='detached';
        }
        else{
            try {
                $user->likes()->attach($course->id);
            }

            catch ( \Illuminate\Database\QueryException $e){
                \Log::error('like error : '. $e);
                return $response;
            }
            $response['message']='attached';
        }
        $response['result'] = 1;
        return $response;
    }

}
