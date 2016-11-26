<?php



use Illuminate\Database\Seeder;



class UserSeed extends Seeder

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
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$qUQF4EoSSjt1ZvSqvWT/dOf/oW3P5/zY2HswaR9bzMoepkh7oDQEK',
                'role_id' => 1,
                'api_token' => str_random(60),
                'remember_token' => '',
                'created_at' => '2016-11-06 19:09:13',
                'updated_at' => '2016-11-06 19:09:13',
                'deleted_at' => null
            ],
            [
                'id' => 2,
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => '$2y$10$qUQF4EoSSjt1ZvSqvWT/dOf/oW3P5/zY2HswaR9bzMoepkh7oDQPK',
                'role_id' => 1,
                'api_token' => str_random(60),
                'remember_token' => '',
                'created_at' => '2016-11-06 19:09:13',
                'updated_at' => '2016-11-06 19:09:13',
                'deleted_at' => null
            ],
        ];



        foreach ($items as $item) {

            $model = new \App\User();



            foreach ($item as $key => $value) {

                $model->{$key} = $value;

            }



            $model->save();

        }

    }

}

