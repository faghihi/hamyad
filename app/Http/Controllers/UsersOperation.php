<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UsersOperation extends Controller
{
    // Checking the duplicate of Email on registering
//    public function CheckEmail($email)
//    {
//        $user=User::where('email',$email)->first();
//        if(!is_null($user))
//        {
//            return 0;
//        }
//        return 1;
//    }

    public function ChangePass()
    {
        if(!Input::has('Password')|| !Input::has('NewPassword')){
            return redirect('/Profile?error=noinfo');
        }
        $user=\Auth::user();
        if(!password_verify(Input::get('Password'),$user->password))
            return 0;
        $user->password=bcrypt(Input::get('NewPassword'));
        if($user->save())
            return 1;
        else
            return 0;
    }

    public function UploadPhoto()
    {
        if (Input::hasFile('image')) {
            $file = array('image' => Input::file('image'));
            $rules = array('image' => 'required|max:1000000|mimes:jpeg,JPEG,PNG,png');
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                return 0;
            }
            if (Input::file('image')->isValid()) {
                $destinationPath = 'uploads/'.\Auth::id(); // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                $user=\Auth::user();
                $user->image=$destinationPath.'/'.$fileName;
                try{
                    $user->save();
                }
                catch ( \Illuminate\Database\QueryException $e){
                    return 0;
                }
                return 1;
            }
            else {
                return 0;
            }
        }
        else
            return 0;
    }

    public function ChangeInfo()
    {
        $user = \Auth::user();
        if (Input::has('Name')) {
            $user->name = Input::get('Name');
            try{
                $user->save();
            }
            catch ( \Illuminate\Database\QueryException $e){
                return 0;
            }
            return 1;
        }
        else
            return 0;
    }

    public function RetriveCourseHelper(User $user)
    {
        $courses=$user->courses_take;
        foreach ($courses as $course){
            $counter11=$course->provider;
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

    public function RetrieveMyCourses()
    {
        $user=\Auth::user();
        return $this->RetriveCourseHelper($user);
    }

    public function RetrieveMyPacks()
    {
        $user=\Auth::user();
        return $user->pack_take;
    }

    public function RetrieveFaveHelper(User $user)
    {
        $fav=$user->fav_sections;
        foreach($fav as $item){
            $course=$item->courses;
            $count = 0;
            foreach ($course->teachers as $teacher) {
                $section['Teacher' . $count] = $teacher;
                $count++;
            }
            $item['Teacher_count'] = $count;
            $rate_count=0;
            $rate_value=0;
            foreach ($item->rates as $rate){
                $rate_count++;
                $rate_value +=$rate->pivot->rate;
            }
            $item['rates_value']=$rate_value;
            $item['rates_count']=$rate_count;

        }

        return $fav;
    }
    public function RetrieveFave()
    {
        $user=\Auth::user();
        return $this->RetrieveFaveHelper($user);
    }
}
