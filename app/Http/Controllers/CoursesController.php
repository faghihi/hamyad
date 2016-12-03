<?php



namespace App\Http\Controllers;



use App\Category;
use App\Course;
use App\Section;

use App\Tag;
use App\User;
use Illuminate\Http\Request;

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
        $tags=Tag::all();
        $Categories=Category::all();
        return $courses;
    }

    public function index()

    {
        return $this->RetrieveCourses();
//        return view('courses.index')->with(['courses'=>$courses,'Tags'=>$tags,'Categories'=>$Categories]);
    }



    public function create()

    {



        return view('courses.create', compact(''));

    }



    public function store(StoreCoursesRequest $request)

    {

        Course::create($request->all());



        return redirect()->route('courses.index');

    }


    public function edit($id)

    {



        $course = Course::findOrFail($id);

        return view('courses.edit', compact('course', ''));

    }


    public function update(UpdateCoursesRequest $request, $id)

    {

        $course = Course::findOrFail($id);

        $course->update($request->all());



        return redirect()->route('courses.index');

    }

    public function ShowSpecificCourse(Course $course)
    {
        $course['Teachers']='';
        foreach ($course->teachers as $teacher){
            $course['Teachers']=$course['Teachers'].",".$teacher->name;
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

        $course['Reviews']=$course->reviews();

        $i=0;
        foreach ($course->tags as $tag){
            foreach ($tag->courses as $item){
                $i++;
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
            return $this->ShowSpecificCourse($course);
//        return view('courses.show', compact('course'));

    }

    /* Search in Courses */

    public function Search()
    {
        $input = Input::all();
        $tagnumber = 0;
        while (Input::has('tag' . $tagnumber)) {
            $input['tag'.$tagnumber]=strtolower($input['tag'.$tagnumber]);
            $input['tag'.$tagnumber]=ucfirst($input['tag'.$tagnumber]);
            $tagnumber++;
        }
        if($tagnumber==0){
            return redirect('/');
        }
        $result=array();
        $list=array();
        $list[]=0;
        for($i=0;$i<$tagnumber;$i++){
            $courses = Course::whereHas('tags', function ($query)use($input,$i) {
                $query->where('tag_name', 'like', $input['tag'.$i]);
            })->get();
            foreach ($courses as $course){
                echo $course->name." ";
                if(!in_array($course->id,$list)){
                    $result[]=$course;
                    $list[]=$course->id;
                }
            }
        }
        #testing the result
        foreach ($result as $item){
            echo $item->name;
            echo "\n";
        }
    }


    public function ShowReviews(Course $course)
    {
        $reviews=$course->reviews;
        foreach ($reviews as $review){
            $user=User::findorfail($review->user_id);
            $review['user_name']=$user->name;
            $review['user_email']=$user->email;
        }

        return $reviews;
    }

    public function PassReviews(Course $course)
    {
        return $this->ShowReviews($course);
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

    /**
     *
     * Remove Course from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $course = Course::findOrFail($id);

        $course->delete();



        return redirect()->route('courses.index');

    }



    /**

     * Delete all selected Course at once.

     *

     * @param Request $request

     */

    public function massDestroy(Request $request)

    {

        if ($request->input('ids')) {

            $entries = Course::whereIn('id', $request->input('ids'))->get();



            foreach ($entries as $entry) {

                $entry->delete();

            }

        }

    }



}
