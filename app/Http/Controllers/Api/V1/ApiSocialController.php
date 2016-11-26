<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\SocialController;
use App\Http\Requests\StoreSubscribesRequest;
use App\Http\Requests\UpdateSubscribesRequest;
use App\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

#TODO
class ApiSocialController extends Controller
{

    protected $social_controller ;

    public function __construct(SocialController $item)
    {
        $this->social_controller = $item;
    }

    public function index()
    {
        return Subscribe::all();
    }
    public function show($id)
    {
        return Subscribe::findOrFail($id);
    }

    public function subscribe()
    {
        return $this->social_controller->subscribe();
    }
}