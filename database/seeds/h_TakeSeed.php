<?php

use Illuminate\Database\Seeder;

class h_TakeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=\App\User::where('id',1)->first();
        $user->courses_take()->attach(1);
        $user=\App\User::where('id',2)->first();
        $user->courses_take()->attach(1);
        $user=\App\User::where('id',2)->first();
        $user->courses_take()->attach(2);
    }
}
