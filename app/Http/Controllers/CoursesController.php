<?php



namespace App\Http\Controllers;



use App\Category;
use App\Course;
use App\Discount;
use App\Section;

use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Barryvdh\Reflection\DocBlock\Type\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Http\Requests\StoreCoursesRequest;

use App\Http\Requests\UpdateCoursesRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class CoursesController extends Controller

{

    public function RetrieveCourses()
    {
        $courses = Course::all();
        foreach ($courses as $course){
            $counter11=$course->provider;
            $course['Teachers']="";
            $counter=0;
            foreach ($course->teachers as $teacher){
                if($counter)
                    $course['Teachers']=$course['Teachers'].",".$teacher->name;
                else
                    $course['Teachers']=$teacher->name;
                $counter++;
            }
            $counter1=0;

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

        }
        return $courses;
    }

    public function index()

    {
//        $Courses=$this->RetrieveCourses();
        $courses = Course::paginate(10);
        $count_course=count(Course::all());
        foreach ($courses as $course){
            $counter11=$course->provider;
            $course['Teachers']="";
            $counter=0;
            foreach ($course->teachers as $teacher){
                if($counter)
                    $course['Teachers']=$course['Teachers'].",".$teacher->name;
                else
                    $course['Teachers']=$teacher->name;
                $counter++;
            }
            $counter1=0;

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

        }
        $tags=Tag::all();
        $Categories=Category::all();
        return view('courses.courses-list')->with(['course_count'=>$count_course,'Data'=>$courses,'Tags'=>$tags,'Categories'=>$Categories]);
    }

    public function ShowSpecificCourse(Course $course)
    {
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
        $intro=$course->section()->where('part','0')->first();
        if(is_null($intro)){
            $course['intro']="nothing";
        }
        else {
            $course['intro']=$intro;
        }
        $count=0;
        $time=0;
        foreach ($course->section as $section){
            $count++;
            $time+=$section->time;
        }
        $std_count=0;
        foreach ($course->users_take as $user){
            $std_count++;
        }
        $course['std_count']=$std_count;
        $course['sections_time']=$time;
        $course['sections_count']=$count;
        $course['rates_value']=$rate_value;
        $course['rates_count']=$rate_count;
        $course['Category']=$course->category->name;
        $reviewss=$course->reviews->where('enable',1);
        $r_count=0;
        $reviews=array();
        while($r_count<5 && $r_count < count($reviewss))
        {
            $reviews[]=$reviewss[$r_count];
            $r_count++;
        }
        foreach ($reviews as $review){
            $user=User::findorfail($review->user_id);
            $review['user_name']=$user->name;
            $review['user_image']=$user->image;
        }
        $course['Reviews']=$reviews;

        $i=0;
        $notvalid=["$course->id"];
        foreach ($course->tags as $tag){
            foreach ($tag->courses as $item){
                if(in_array($item->id,$notvalid))
                    continue;
                $i++;
                $counter11=$item->provider;
                $item['Teachers']="";
                $counter=0;
                foreach ($item->teachers as $teacher){
                    if($counter)
                        $item['Teachers']=$item['Teachers'].",".$teacher->name;
                    else
                        $item['Teachers']=$teacher->name;
                    $counter++;
                }
                $counter1=0;

                $rate_count=0;
                $rate_value=0;
                foreach ($item->rates as $rate){
                    $rate_count++;
                    $rate_value +=$rate->pivot->rate;
                }
                $count=0;
                $time=0;
                foreach ($item->section as $section){
                    $count++;
                    $time+=$section->time;
                }
                $item['sections_time']=$time;
                $item['sections_count']=$count;
                $item['rates_value']=$rate_value;
                $item['rates_count']=$rate_count;
                $counter=$item->category->name;
                $notvalid[]=$item->id;
                $course["relate".$i]=$item;
            }
            if($i==3)
                break;
        }

        #testing the result
//        print_r($course);
        return $course;
    }

    public function show(Course $course)

    {
        $Data=$this->ShowSpecificCourse($course);
//        return $Data;
        return view('courses.course-detail')->with('course',$Data);

    }

    /* Search in Courses */

    public function Search(Request $request)
    {
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $input = Input::all();
        $tagnumber = 0;
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
            return redirect('/courses?error=tag');
        }
        $tags=Tag::all();
        $Categories=Category::all();
        if($catnumber==0)
        {
            $total=count($result);
            $col =$result;
            $perPage = 10;
//            $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
            $offset = ($currentPage * $perPage) - $perPage;
            $entries = new LengthAwarePaginator(array_slice($result, $offset, $perPage, true), count($col), $perPage, $currentPage,['path' => $request->url(), 'query' => $request->query()]);
            $entries->setPath('/Courses/Search');
            return view('courses.courses-list')->with(['Data'=>$entries,'course_count'=>$total,'Search'=>'1','Tags'=>$tags,'Categories'=>$Categories]);
//                echo 1;
//            return $result;
//            foreach ($result as $k){
//                echo $k->name.'<br>';
//            }
//            print_r($category_list);
        }
        else{
            $Data=array();
            foreach ($result as $item){
                if(in_array($item->category->name,$category_list)){
                    $Data[]=$item;
                }
            }
            $total=count($Data);
            $col =$Data;
            $perPage = 10;
            $offset = ($currentPage * $perPage) - $perPage;
            $entries = new LengthAwarePaginator(array_slice($Data, $offset, $perPage, true), count($col), $perPage, $currentPage,['path' => $request->url(), 'query' => $request->query()]);
            $entries->setPath('/Courses/Search');
//            return $Data;
//            echo 0;
            return view('courses.courses-list')->with(['Data'=>$entries,'course_count'=>$total,'Search'=>'1','Tags'=>$tags,'Categories'=>$Categories]);
//            foreach ($Data as $k){
//                echo $k->name.'<br>';
//            }
//            print_r($category_list);
        }
    }


    public function ShowReviews(Course $course)
    {
        $reviews=$course->reviews->where('enable',1);
        foreach ($reviews as $review){
            $user=User::findorfail($review->user_id);
            $review['user_name']=$user->name;
            $review['user_image']=$user->image;
        }

        return $reviews;
    }

    public function PassReviews(Course $course)
    {
        $Data=$this->ShowReviews($course);
        $counter11=$course->provider;
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
        if(\Auth::check())
        {
            $able=1;
        }
        else
            $able=0;
//        return $Data;
        return view('courses.course-review')->with(['Data'=>$Data,'course'=>$course,'able'=>$able]);
    }

    public function AddCourse(Course $course,$payment,$discount)
    {
        $user=\Auth::user();
        try {
            $user->courses_take()->attach($course->id,['paid'=>$payment,'discunt_used'=>$discount]);
        }
        catch ( \Illuminate\Database\QueryException $e){

            return 0;
        }

        return 1;

    }
}
