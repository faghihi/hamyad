<?php

namespace App\Http\Controllers;

use App\Category;
use App\Pack;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class PackController extends Controller
{
    public function RetrieveAll()
    {
        $packs=Pack::all();
        foreach ($packs as $pack){
            $pack->count_courses=count($pack->courses);
        }

        return $packs;
    }
    public function index()
    {
        $packs=Pack::all();
        foreach ($packs as $pack){
            $pack['count_courses']=count($pack->courses);
            $counter=$pack->courses;
            $i=1;
            foreach ($pack->courses as $course)
            {
                if($i==4){
                    break;
                }
                $pack['relate'.$i]=$course->name;
                $i++;
            }
        }
//        return $packs;
        return view('courses.packages')->with(['Packs'=>$packs]);

    }

    public function ShowSpecificPack(Pack $pack)
    {
        $courses=$pack->courses;
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
    public function show(Pack $pack,Request$request)
    {
        $courses=$pack->courses()->paginate(10);
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

        $tags=Tag::all();
        $Categories=Category::all();
        return view('courses.courses-list')->with(['Data'=>$courses,'course_count'=>count($courses),'Search'=>'1','Tags'=>$tags,'Categories'=>$Categories,'Pack'=>1]);

    }

    public function Take(Pack $pack,$payment,$discount,$period)
    {
        $StartDate=date('Y-m-d H:i:s');
        $days=$period;
        $final_time= strtotime(date("Y-m-d H:i:s", strtotime($StartDate)) . " +$days day");
        $final_time = date("Y-m-d H:i:s",$final_time);
        $user=\Auth::user();
        try {
            $user->pack_take()->attach($pack->id,['paid'=>$payment,'discount_used'=>$discount,'start'=>$StartDate,'end'=>$final_time]);
        }
        catch ( \Illuminate\Database\QueryException $e){

            return 0;
        }
        return 1;
    }

    public function ExtendAlertUsers()
    {
        $users=User::all();
        $Data=array();
        foreach ($users as $user){
            foreach ($user->pack_take as $instace){
                $end=new \DateTime($instace->pivot->end);
                $today=date('Y-m-d H:i:s');
                $today=new \DateTime($today);
                $interval = $today->diff($end);
                if($interval->days < 2)
                {
                    $item=$user;
                    $pack=Pack::find($instace->id);
                    $item['Pack_id']=$pack->id;
                    $item['Pack_name']=$pack->title;
                    $item['Pack_desc']=$pack->description;
                    $item['remain']=$interval->days;
                    $Data[]=$item;
                }
            }
        }
        return $Data;
    }

}
