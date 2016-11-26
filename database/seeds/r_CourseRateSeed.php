<?php

use Illuminate\Database\Seeder;

class r_CourseRateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses=\App\Course::all();
        $user=\App\User::find(1);
        foreach ($courses as $course)
            $course->rates()->attach($user->id,['rate' =>5]);
    }
}
