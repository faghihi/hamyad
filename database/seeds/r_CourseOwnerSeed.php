<?php

use Illuminate\Database\Seeder;

class r_CourseOwnerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses=\App\Course::all();
        $admin=\App\User::find(1);
        foreach ($courses as $course)
            $course->admins()->attach($admin->id);
    }
}
