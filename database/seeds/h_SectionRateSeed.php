<?php

use Illuminate\Database\Seeder;

class h_SectionRateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections=\App\Section::all();
        $user=\App\User::find(1);
        foreach ($sections as $section)
            $section->rates()->attach($user->id,['rate' =>2.5]);
    }
}
