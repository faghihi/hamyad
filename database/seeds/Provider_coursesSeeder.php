<?php

use Illuminate\Database\Seeder;

class Provider_coursesSeeder extends Seeder
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
            $course->provider()->attach(2);
    }
}
