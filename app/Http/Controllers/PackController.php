<?php

namespace App\Http\Controllers;

use App\Pack;
use Illuminate\Http\Request;

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
        return $this->RetrieveAll();
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
    public function show(Pack $pack)
    {
        $this->ShowSpecificPack($pack);
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
}
