<?php

use Illuminate\Database\Seeder;

class r_CategorysSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'Programming','description'=>'nothing special'],
            ['name' => 'Science','description'=>'nothing special'],
            ['name' => 'greate Deal','description'=>'nothing special'],
        ];
        foreach ($items as $item) {
            $model = new \App\Category();
            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }
            $model->save();
        }
    }
}
