<?php

namespace App\Http\Controllers\Api\V1;

use App\Course;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CoursesController;


class ApiCoursesController extends Controller
{
    protected $courses_controller ;

    /**
     * ApiCoursesController constructor.
     * @param CoursesController $item
     */
    public function __construct(CoursesController $item)
    {
        $this->courses_controller = $item;
    }


    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # in create items
        return $this->courses_controller->index();

//        return Course::all();
    }

    public function show(Course $course)
    {
        return $course;
    }
}
