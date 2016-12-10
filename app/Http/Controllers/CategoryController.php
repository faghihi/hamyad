<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function RetrieveCategories()
    {
        $Categories=Category::all();
        $counter=0;
        foreach ($Categories as $item){
            $counter=$item->tags;
        }
        return $Categories;
    }
    public function index()
    {
        $Categories=$this->RetrieveCategories();
        return $Categories;
//        return view('Category.index',compact('Categories'));
    }

    public function ShowSpecificCategories(Category $category)
    {
        $courses=$category->courses;
        foreach ($courses as $course){
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

        }
        return $courses;
    }
    public function show(Category $category)
    {
//        return $this->ShowSpecificCategories($category);
        $courses=$category->courses()->paginate(15);
        $count_course=count($courses);
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
}
