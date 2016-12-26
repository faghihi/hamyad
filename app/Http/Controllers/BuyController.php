<?php

namespace App\Http\Controllers;

use App\Course;
use App\Pack;
use Illuminate\Http\Request;
use App\Http\Controllers\DiscountController;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Null_;

class BuyController extends Controller
{
    public $discountcontroller;
    public function _construc(DiscountController $d)
    {
        $this->discountcontroller=$d;
    }
    public function BuyCourse(Course $course)
    {
        $user=\Auth::user();
        return view('courses.course-purchase')->with(['user'=>$user,'Course'=>1,'Info'=>$course]);
    }

    public function BuyPack(Pack $pack)
    {
        $user=\Auth::user();
        return view('courses.course-purchase')->with(['user'=>$user,'Pack'=>1,'Info'=>$pack]);
    }

    public function CourseBuyStart(Course $course)
    {
        $user=\Auth::user();
        if($course->price == 0){
            try {
                $user->courses_take()->attach($course->id,['paid'=>0,'discount_used'=>'']);
            }
            catch ( \Illuminate\Database\QueryException $e){
                return view('errors.405');
            }
            $course['category_name']=$course->category->name;
            $count=0;
            $time=0;
            foreach ($course->section as $section){
                $count++;
                $time+=$section->time;
            }
            $course['sections_time']=$time;
            $course['sections_count']=$count;
            return view('courses.course-confirmation')->with(['user'=>$user,'course'=>$course,'Course'=>1]);
        }
        elseif(Input::has('Code')){

        }
//        elseif{
//
//        }
    }

    public function PackBuyStart(Pacl $pack)
    {

    }
}
