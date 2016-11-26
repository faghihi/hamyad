<?php

use Illuminate\Database\Seeder;

class TakePack extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=\App\User::where('id',1)->first();
        $user->pack_take()->attach(1,['start'=>'2016/10/8','end'=>'2016/11/8']);
        $user=\App\User::where('id',2)->first();
        $user->pack_take()->attach(1,['start'=>'2016/10/8','end'=>'2016/11/8']);
    }
}
