<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\UsersOperation;
use App\Http\Requests\StoreSubscribesRequest;
use App\Http\Requests\UpdateSubscribesRequest;
use App\Subscribe;
use App\UserFinance;
use Validator;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

#TODO
class ApiUsersOperationController extends Controller
{

    protected $usersOperation_controller ;

    public function __construct(UsersOperation $item)
    {
        $this->usersOperation_controller = $item;
    }

    public function ChangePass()
    {
        $response = ['result' => '0'];

        if(!Input::has('Password')|| !Input::has('NewPassword')){
            return $response;
        }

        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();
        if(!is_null($user))
            $user=User::find($user->id);
        else
            return $response;

        if(!password_verify(Input::get('Password'),$user->password))
            return $response;
        $user->password=bcrypt(Input::get('NewPassword'));
        if($user->save()){
            $response['result'] = 1;
            return $response;
        }
        else
            return $response;
    }

    public function UploadPhoto()
    {

        $response = ['result' => '0'];
        $n = Input::get('api_token');

        $user = User::where('api_token', $n)->first();
        if(!is_null($user))
            $user=User::find($user->id);
        else
            return $response;

        if (Input::hasFile('image')) {
            $file = array('image' => Input::file('image'));
            $rules = array('image' => 'required|max:100000|mimes:jpeg,JPEG,PNG,png');
            $messages=[
                'image.required'=>'آپلود تصویر اجباری است ',
                'image.max'=>'حجم فایل بسیار زیاد است ',
                'image.mimes'=>'فرمت فایل شما ساپورت نمیشود.',
            ];
            $validator = Validator::make($file, $rules,$messages);
            if ($validator->fails()) {
                return $response;
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
                    return $response;
                }
                $response['result']='1';
                return $response;
            }
            else {
                return $response;
            }
        }
        else
            return $response;
    }

    public function ChangeInfo()
    {
        $response = ['result' => '0'];
        $n = Input::get('api_token');

        $user = User::where('api_token', $n)->first();
        if(!is_null($user))
            $user=User::find($user->id);
        else
            return $response;

        if (Input::has('Name')) {
            $user->name = Input::get('Name');
            try{
                $user->save();
            }
            catch ( \Illuminate\Database\QueryException $e){
                return $response;
            }
            $response['result']='1';
            return $response;
        }
        else
            return $response;
    }

    public function RetrieveOpenCourses()
    {
        $response = ['result' => '0','courses'=>null];
        $n = Input::get('api_token');

        $user = User::where('api_token', $n)->first();
        if(!is_null($user))
            $user=User::find($user->id);
        else
            return $response;
        $response['result']=1;
        $response['courses']= $this->usersOperation_controller->RetriveCourseHelper($user);
        return $response;
    }
    public function RetrieveClosedCourses()
    {
        $response = ['result' => '0','courses'=>null];
        $n = Input::get('api_token');

        $user = User::where('api_token', $n)->first();
        if(!is_null($user))
            $user=User::find($user->id);
        else
            return $response;
        $response['result']=1;
        $response['courses']= $this->usersOperation_controller->RetriveClosedCourseHelper($user);
        return $response;
    }

    public function RetrieveMyPack()
    {
        $response = ['result' => '0'];
        $n = Input::get('api_token');

        $user = User::where('api_token', $n)->first();
        if(!is_null($user))
            $user=User::find($user->id);
        else
            return $response;
        return $user->pack_take;
    }

    public function RetrieveBookmarks()
    {
        $response = ['result' => '0'];
        $n = Input::get('api_token');

        $user = User::where('api_token', $n)->first();
        if(!is_null($user))
            $user=User::find($user->id);
        else
            return $response;
        return $this->usersOperation_controller->RetrieveFaveHelper($user);
    }

    public function Profile()
    {
        $response = ['result' => '0'];
        $n = Input::get('api_token');

        $user = User::where('api_token', $n)->first();
        if(!is_null($user))
            $user=User::find($user->id);
        else
            return $response;
        $courses=$user->courses_take;
        $packs=$user->pack_take;
        foreach($packs as $pack){
            $pack['end']=$pack->pivot->end;
            $pack['start']=$pack->pivot->start;
        }
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
            $counter1=0;

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
            $course->provider;
            foreach ($course['provider'] as $pr)
            {
                $varr3= json_decode(json_encode($pr), true);
                foreach ($varr3 as $k=>$v)
                {
                    if(!in_array($k,\Config::get('restrict.Provider'))){
                        unset($pr->$k);
                    }
                }
            }
            $varr3= json_decode(json_encode($course), true);
            foreach ($varr3 as $k=>$v)
            {
                if(!in_array($k,\Config::get('restrict.Course'))){
                    unset($course->$k);
                }
            }
        }
        $finance=$this->Finance($user);

        $response['result']=1;
        $response['Finance']=$finance;

        $varr3= json_decode(json_encode($user), true);
        foreach ($varr3 as $k=>$v)
        {
            if(!in_array($k,\Config::get('restrict.User'))){
                unset($user->$k);
            }
        }
        $response['user']=$user;
        foreach ($packs as $pack){
            $varr3= json_decode(json_encode($pack), true);
            foreach ($varr3 as $k=>$v)
            {
                if(!in_array($k,\Config::get('restrict.MyPack'))){
                    unset($pack->$k);
                }
            }
        }
        $response['Packs']=$packs;
        $response['Courses']=$courses;

        return $response;

    }

    public function Finance(User $user)
    {
        $amount=$user->finance;
//        echo $amount;
        if(is_null($amount))
        {
            return -1;
        }
        else
        {
            return $amount->amount;
        }
    }

    public function HasFinance(User $user)
    {
        $amount=$user->finance;
//        echo $amount;
        if(is_null($amount))
        {
            return -1;
        }
        else
        {
            return 1;
        }
    }

    public function AdjustCredit()
    {
        $payment=Input::get('payment');
        $response = ['result' => '0'];
        $n = Input::get('api_token');

        $user = User::where('api_token', $n)->first();
        if(!is_null($user))
            $user=User::find($user->id);
        else
            return $response;

        if($this->HasFinance($user)!=-1)
        {
            $finance = User::with('finance')->find($user->id);
            $finance->finance->amount=$finance->finance->amount+$payment;
            try{
                $finance->push();
            }
            catch ( \Illuminate\Database\QueryException $e){
                return $response;
            }
            $response['result']=1;
            return $response;
        }
        else
        {
            $finance=new UserFinance();
            $finance->amount=$payment;
            $finance->user_id=$user->id;
            try{
                $finance->save();
            }
            catch ( \Illuminate\Database\QueryException $e){
                return $response;
            }
            $response['result']=1;
            return $response;
        }
    }

}