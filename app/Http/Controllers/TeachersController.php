<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TeachersController extends Controller
{
    public function RetrieveData()
    {
        $teachers=Teacher::all();
        foreach ($teachers as $teacher){
            $teacher['Course_count']=count($teacher->courses);
            $rate_count=0;
            $rate_value=0;
            foreach ($teacher->rates as $rate){
                $rate_count++;
                $rate_value +=$rate->pivot->rate;
            }
            $teacher['rates_value']=$rate_value;
            $teacher['rates_count']=$rate_count;
        }
        return $teachers;
    }
    public function index()
    {
        $data=$this->RetrieveData();
        return view('instructor.instructor-list')->with('Data',$data);
    }

    public function Search()
    {
        $input = Input::all();
        if(!isset($input['name'])){
            return redirect('/');
        }
        $teachers=Teacher::where('name','like','%'.$input['name'].'%');
        foreach ($teachers as $teacher){
            $teacher['Course_count']=count($teacher->courses);
            $rate_count=0;
            $rate_value=0;
            foreach ($teacher->rates as $rate){
                $rate_count++;
                $rate_value +=$rate->pivot->rate;
            }
            $teacher['rates_value']=$rate_value;
            $teacher['rates_count']=$rate_count;
        }
        return $teachers;
    }

    public function ShowSpecific(Teacher $teacher)
    {
        $counter=$teacher->courses;
        return $teacher;
    }
    public function Show(Teacher $teacher)
    {
        return $this->ShowSpecific($teacher);
    }

    public function GiveRate(Teacher $teacher)
    {
        if(! \Auth::check()){
            return 0;
        }
        $user=\Auth::user();
        $rate=Input::get('rate');
        return $this->StoreRate($user,$teacher,$rate);
    }

    public function StoreRate(User $user,Teacher $teacher,$rate)
    {
        $hasTask = $teacher->rates()->where('users.id', $user->id)->exists();
        if($hasTask){
            try {
                $teacher->rates()->updateExistingPivot($user->id,['rate'=>$rate]);
            }
            catch ( \Illuminate\Database\QueryException $e){
                return 0;
            }
            return 1;
        }
        else{
            try {
                $teacher->rates()->attach($user->id,['rate'=>$rate]);
            }
            catch ( \Illuminate\Database\QueryException $e){
                return 0;
            }
            return 1;
        }

    }
}
