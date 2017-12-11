<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseFile extends Model
{
    protected $table='course_files';

    public function courseId()
    {
        return $this->belongsTo('App\Course');
    }
}
