<?php

namespace App\Http\Controllers;

use App\Section;
use App\User;
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
        return $section;
    }

    public function show(Section $section)
    {
        if($this->CheckAccess(\Auth::user(),$section))
            return $this->ShowSpecificSection($section);
        else
            echo "No Access";
    }

    public function ShowReviews(Section $section)
    {
        $reviews=$section->reviews->where('enable',1);
        foreach ($reviews as $review){
            $user=User::findorfail($review->user_id);
            $review['user_name']=$user->name;
            $review['user_email']=$user->email;
        }

        return $reviews;
    }

    public function CheckAccess(User $user,Section $section)
    {
        $hasCourse = $user->courses_take()->where('courses.id', $section->course_id)->exists();
        $packs=$user->pack_take;
        foreach ($packs as $pack){
            $courses=$pack->courses;
            foreach ($courses as $course){
                if($course->id==$section->course_id){
                    return 1;
                }
            }
        }
        return $hasCourse;
    }
}
