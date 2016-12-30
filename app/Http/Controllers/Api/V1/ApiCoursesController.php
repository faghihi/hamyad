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

    public function show(Course $course)
    {
        return $this->courses_controller->ShowSpecificCourse($course);
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
            $courses = Course::whereHas('tags', function ($query)use($input,$i) {
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
        return $this->courses_controller->ShowReviews($course);
    }

    public function AddCourse(Course $course)
    {

        $number = Input::get('amount');
        $discount = Input::get('discount');
        $response = ['result' => '0'];

        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();

        if (is_null($user)){
            return $response;
        }



        try {
            $user->courses_take()->attach($course->id , ['paid' => $number, 'discount_used' => $discount]);
        }

        catch ( \Illuminate\Database\QueryException $e){

            return $response;
        }

        $response['result'] = 1;
        return $response;
    }

}
