<?php

use Illuminate\Database\Seeder;

class r_CertificateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=\App\User::find(1);
        $user->courses_certificate()->attach(1,['point' =>70,'description'=>'test completed']);
    }
}
