<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function Favourite(Section $section)
    {
        $user=\Auth::user();
        if($user->fav_sections()->attach($section->id))
            return 1;
        else
            return 0;

    }


}
