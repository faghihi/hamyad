<?php



use Illuminate\Database\Seeder;



class UserActionSeed extends Seeder

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
                'user_id' => 1,
                'action' => 'created',
                'action_model' => 'roles',
                'action_id' => 3,
                'created_at' => '2016-11-06 19:40:34',
                'updated_at' => '2016-11-06 19:40:34',
                'deleted_at' => null
            ],

            [
                'id' => 2,
                'user_id' => 1,
                'action' => 'created',
                'action_model' => 'roles',
                'action_id' => 4,
                'created_at' => '2016-11-06 19:41:07',
                'updated_at' => '2016-11-06 19:41:07',
                'deleted_at' => null
            ],

        ];



        foreach ($items as $item) {

            $model = new \App\UserAction();



            foreach ($item as $key => $value) {

                $model->{$key} = $value;

            }



            $model->save();

        }

    }

}
