<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Teacher;
use App\TV;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    //Controling the indexs View's

    public function RetrieveData()
    {
        $Data=array();
        $Data['Courses']=array();
        $courses=Course::orderBy('created_at', 'desc')->get();
        $counter=0;
        foreach ($courses as $course){
            $Data['Courses'][$counter]=$course;
            $counter++;
            if($counter==9){
                break;
            }
        }

        foreach ($Data['Courses'] as $course ){
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
                $counter=$course->provider;
        }
        $Categories=Category::all();
        $Data['category']=$Categories;
        return $Data;

    }

    public function Teachers()
    {
        $numberOfRows = 4;
        $teachers=Teacher::all();
        $teachers = $teachers->shuffle()->slice(0,$numberOfRows);
        return $teachers;

    }
    public function index(){
        $Data=$this->RetrieveData();
        if (!Auth::check()){
            $Data['user']['name']='NoUser';
        }
        else {
            $Data['user']['name']=Auth::user()->name;
        }
//        return $Data;
//        return $this->Teachers();
        return view('homepage')->with('Data',$Data);
    }


}