<?php

namespace App\Http\Controllers;

use App\Category;
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

    public function show(Category $category)
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
}
