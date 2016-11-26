<?php

use Illuminate\Database\Seeder;

class r_CourseReviewSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses=\App\Course::all();
        foreach ($courses as $course)
        {
            $course->reviews()->attach(4);
        };
    }
}
