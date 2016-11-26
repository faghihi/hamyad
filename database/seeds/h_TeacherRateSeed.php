<?php

use Illuminate\Database\Seeder;

class h_TeacherRateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers=\App\Teacher::all();
        $user=\App\User::find(2);
        foreach ($teachers as $teacher)
            $teacher->rates()->attach($user->id,['rate' =>3]);
    }
}
