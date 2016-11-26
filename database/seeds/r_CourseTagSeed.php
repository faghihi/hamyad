<?php

use Illuminate\Database\Seeder;

class r_CourseTagSeed extends Seeder
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
            $course->tags()->attach(1);
            $course->tags()->attach(2);
        }

    }
}
