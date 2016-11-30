<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function Favourite(Section $section)
    {
        $user=\Auth::user();
        try {
            $user->fav_sections()->attach($section->id);
        }

        catch ( \Illuminate\Database\QueryException $e){

            return 0;
        }
        return 1;

    }

    public function ShowSpecificSection(Section$section)
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
        $rate_count=0;
        $rate_value=0;
        foreach ($section->rates as $rate){
            $rate_count++;
            $rate_value +=$rate->pivot->rate;
        }
        $section['rates_value']=$rate_value;
        $section['rates_count']=$rate_count;

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

    public function show(Section $section)
    {
        return $this->ShowSpecificSection($section);
    }

}
