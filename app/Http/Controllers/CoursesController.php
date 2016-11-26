<?php



namespace App\Http\Controllers;



use App\Category;
use App\Course;
use App\Section;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCoursesRequest;

use App\Http\Requests\UpdateCoursesRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class CoursesController extends Controller

{
    /**

     * Display a listing of Course.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $courses = Course::all();
        foreach ($courses as $course){
            $course['Teachers']="";
            foreach ($course->teachers as $teacher){
                $course['Teachers']=$course['Teachers'].",".$teacher->name;
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
            $course['Category']=$course->category->name;

        }
        $tags=Tag::all();
        $Categories=Category::all();

        # testing the result
//        foreach ($courses as $course){
//            print_r($course);
//            echo "\n";
//        }
//        return $courses;
        return view('courses.index')->with(['courses'=>$courses,'Tags'=>$tags,'Categories'=>$Categories]);
    }



    /**

     * Show the form for creating new Course.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {



        return view('courses.create', compact(''));

    }



    /**

     * Store a newly created Course in storage.

     *

     * @param  \App\Http\Requests\StoreCoursesRequest  $request

     * @return \Illuminate\Http\Response

     */

    public function store(StoreCoursesRequest $request)

    {

        Course::create($request->all());



        return redirect()->route('courses.index');

    }



    /**

     * Show the form for editing Course.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {



        $course = Course::findOrFail($id);

        return view('courses.edit', compact('course', ''));

    }



    /**

     * Update Course in storage.

     *

     * @param  \App\Http\Requests\UpdateCoursesRequest  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(UpdateCoursesRequest $request, $id)

    {

        $course = Course::findOrFail($id);

        $course->update($request->all());



        return redirect()->route('courses.index');

    }



    /**

     * Display Course.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show(Course $course)

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
//        return view('courses.show', compact('course'));

    }

    public function Section(Section $section)
    {
        $course = $section->courses;
        $section['course'] = $course;
        $next = $course->section->where('part', $section->part + 1)->first();
        if (!is_null($next)) {
            $section['next'] = $next;
        } else {
            $section['next'] = 'last';
        }
        $pre = $course->section->where('part', $section->part - 1)->first();
        if (!is_null($pre)) {
            $section['pre'] = $pre;
        } else {
            $section['pre'] = 'first';
        }
        $count = 0;
        foreach ($course->teachers as $teacher) {
            $section['Teacher' . $count] = $teacher;
            $count++;
        }
        $section['Teacher_count'] = $count;

        $allsections = array();
        $count = 0;
        foreach ($course->section as $item) {
            $allsections[$count] = $item;
            if ($section->id == $item->id)
                $allsections[$count]['enable'] = 1;
            else
                $allsections[$count]['enable'] = 0;
            $count++;
        }

        #testng the result
//        print_r($section);
        return $section;
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
