<?php

use Illuminate\Database\Seeder;

class r_AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '123456789',
                'role_id' => 1,
                'remember_token' => '',
            ],
            [
                'name' => 'Admin1',
                'email' => 'admin1@admin.com',
                'password' => '$2y$10$qUQF4EoSSjt1ZvSqvWT/dOf/oW3P5/zY2HswaR9bzMoepkh7oDQEK',
                'role_id' => 1,
                'remember_token' => '',
            ],
        ];



        foreach ($items as $item) {

            $model = new \App\Admin();



            foreach ($item as $key => $value) {

                $model->{$key} = $value;

            }



            $model->save();

        }
    }
}
