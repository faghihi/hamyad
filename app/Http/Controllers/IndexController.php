<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Teacher;
use App\TV;
use Auth;
use Illuminate\Http\Request;

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
//        $TVs=TV::all();
//        $Data['TV']=$TVs;
        $Categories=Category::all();
        $Data['category']=$Categories;
        if(Auth::check()){
            $user=Auth::user();
            $Data['user']['name']=$user->name;
        }
        else{
            $Data['user']['name']='NoUser';
        }

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
        return $this->RetrieveData();
//        return $this->Teachers();
    }

}