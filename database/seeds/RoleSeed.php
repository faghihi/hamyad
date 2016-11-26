<?php



use Illuminate\Database\Seeder;



class RoleSeed extends Seeder

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
                'title' => 'Administrator (can create other users)',
                'created_at' => '2016-11-06 19:09:12',
                'updated_at' => '2016-11-06 19:09:12',
                'deleted_at' => null
            ],

            [
                'id' => 2,
                'title' => 'Simple user',
                'created_at' => '2016-11-06 19:09:12',
                'updated_at' => '2016-11-06 19:09:12',
                'deleted_at' => null
            ],

            [
                'id' => 3,
                'title' => 'Teacher',
                'created_at' => '2016-11-06 19:40:34',
                'updated_at' => '2016-11-06 19:40:34',
                'deleted_at' => null
            ],

            [
                'id' => 4,
                'title' => 'normal_admin',
                'created_at' => '2016-11-06 19:41:07',
                'updated_at' => '2016-11-06 19:41:07',
                'deleted_at' => null
            ],
        ];



        foreach ($items as $item) {

            $model = new \App\Role();



            foreach ($item as $key => $value) {

                $model->{$key} = $value;

            }



            $model->save();

        }

    }

}

