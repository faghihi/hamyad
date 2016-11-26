<?php

use Illuminate\Database\Seeder;

class Pack_courses_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        $packs=\App\Pack::all();
        foreach ($packs as $pack)
        {
            $pack->courses()->attach(1);
            $pack->courses()->attach(2);
        }

    }
}
