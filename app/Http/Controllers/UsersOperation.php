<?php

namespace App\Http\Controllers;

use App\Cooperate;
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

    public function Cooperate()
    {
        $rules = array(
            'Name' => 'required|min:7',
            'Email' => 'required|Email',
            'Description' => 'required|min:20',
            'Telephone'=>'required'
        );
        $messages = [
            'Name.required' => 'وارد کردن نام شما ضروری است ',
            'Email.required' => 'وارد کردن ایمیل شما ضروری است ',
            'Description.required' => 'وارد کردن توضیحات  شما ضروری است ',
            'Telephone.required' => 'وارد کردن شماره تماس شما ضروری است ',
            'Name.min' => 'نام کامل خود را وارد نمایید ( حداقل ۷ کاراکتر) ',
            'Email.Email' => 'ایمیل معتبر نیست',
            'Description.min' => 'حداقل ۲۰ کاراکتر لازم است'
        ];
        $input=Input::all();
        $validator = Validator::make($input, $rules,$messages);
        if($validator->fails()){
            return redirect('/cooperate')
                ->withErrors($validator)
                ->withInput();
        }
        $Co=New Cooperate();
        $Co->name=$input['Name'];
        $Co->email=$input['Email'];
        $Co->description=$input['Description'];
        $Co->phone=$input['Telephone'];
        if (Input::hasFile('Resume')) {
            $file = array('Resume' => Input::file('Resume'));
            $rules = array('Resume' => 'required|max:1000000|mimes:pdf,PDF,docx');
            $messages = [
                'Resume.required' => 'رزومه شما اجباری است  ',
                'Resume.max' => 'فایل شما از حداکثر مجاز بیشتر است ',
                'Resume.mimes' => 'تایپ های مورد قبول تنها pdf و docx است .',
            ];
            $validator = Validator::make($file, $rules,$messages);
            if ($validator->fails()) {
                return redirect('/cooperate')
                    ->withErrors($validator)
                    ->withInput();
            }
            if (Input::file('Resume')->isValid()) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('Resume')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('Resume')->move($destinationPath, $fileName); // uploading file to given path
                $Co->resume_link=$destinationPath.'/'.$fileName;
                try{
                    $Co->save();
                }
                catch ( \Illuminate\Database\QueryException $e){
                    return view('instructor.addInstructor')->with('error','2');
                }
            }
            else {
                return view('instructor.addInstructor')>with('error','2');
            }
        }
        if (Input::hasFile('Sample')) {
            $file = array('Sample' => Input::file('Sample'));
            $rules = array('Sample' => 'required|max:10000000|mimes:mp4,mkv');
            $messages = [
                'Sample.required' => 'نمونه کار  شما اجباری است  ',
                'Sample.max' => 'فایل شما از حداکثر مجاز بیشتر است ',
                'Sample.mimes' => 'تایپ های مورد قبول تنها mp4,mkv است .',
            ];
            $validator = Validator::make($file, $rules,$messages);
            if ($validator->fails()) {
                return redirect('/cooperate')
                    ->withErrors($validator)
                    ->withInput();
            }
            if (Input::file('Sample')->isValid()) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('Sample')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('Sample')->move($destinationPath, $fileName); // uploading file to given path
                $Co->sample_link=$destinationPath.'/'.$fileName;
                try{
                    $Co->save();
                }
                catch ( \Illuminate\Database\QueryException $e){
                    return view('instructor.addInstructor')->with('error','2');
                }
                return view('instructor.addInstructor')->with('complete','1');

            }
            else {
                return view('instructor.addInstructor')->with('error','2');
            }
        }
        try{
            $Co->save();
        }
        catch ( \Illuminate\Database\QueryException $e){
            return view('instructor.addInstructor')->with('error','2');
        }
        return view('instructor.addInstructor')->with('complete','1'); 

    }
}
