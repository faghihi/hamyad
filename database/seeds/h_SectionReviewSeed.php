<?php

use Illuminate\Database\Seeder;

class h_SectionReviewSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections=\App\Section::all();
        foreach ($sections as $section)
        {
            $section->reviews()->attach(3);
        };
    }
}
