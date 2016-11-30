<?php

namespace App\Http\Controllers\Api\V1;

use App\Section;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SectionsController;

# TODO
use App\Http\Requests\StoreSectionsRequest;
use App\Http\Requests\UpdateSectionsRequest;
use Illuminate\Support\Facades\Input;
use Mockery\CountValidator\Exception;

class ApiSectionsController extends Controller
{
    protected $sections_controller ;

    public function __construct(Section $item)
    {
        $this->sections_controller = $item;
    }

//    no index

    public function show(Section $section)
    {
        return $this->sections_controller->ShowSpecificSection($section);
    }

    public function favorite(Section $favorite)
    {
        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();

        $response = ['result' => '0'];

        try {
            $user->fav_sections()->attach($favorite->id);
        }

        catch ( \Illuminate\Database\QueryException $e){

            return $response;
        }
        $response['result'] = 1;
        return $response;
    }
}