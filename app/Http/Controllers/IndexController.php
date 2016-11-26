<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\TV;
use Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //Controling the indexs View's

    public function index(){
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

        #testing the result
//        foreach ($Data as $item){
//            print_r($item);
//            echo "<BR>";
//        }
    }

    public function Category_Index()
    {
        $Categories=Category::all();
        foreach ($Categories as $item) {
            $item['Tags']=array();
            $counter=0;
            foreach ($item->tags as $tag){
                $item['Tags'][$counter]=$tag->tag_name;
                $counter++;
            }
        }

        #testing the result
//        foreach ($Categories as $category){
//            print_r($category);
//            echo "\n";
//        }


        return view('Category.index',compact('Categories'));
    }
    public function TV_Index()
    {
        $TVs=TV::all();
        #adding the rates of TVs
        foreach ($TVs as $TV)
        {
            $sum=0;$count=0;
            foreach ($TV->rates as $rate){
                $sum+=$rate->pivot->rate;
                $count++;
            }
            $average=0;
            if($count!=0) {
                $average=$sum/$count;
            }
            $TV['rate']=$average;
        }

        #testing the result
        foreach ($TVs as $TV){
            echo $TV['rate'];
            echo "\n";
        }
//        return view('TV.index',compact('TVs'));
    }
}