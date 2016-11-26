<?php

use Illuminate\Database\Seeder;

class r_FavoriteSectionsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=\App\User::find(1);
        $users->fav_sections()->attach(2);
    }
}
