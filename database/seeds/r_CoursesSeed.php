<?php

use Illuminate\Database\Seeder;

class r_CoursesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'Programming','price'=>10,'category_id'=>1],
            ['name' => 'Web','price'=>100,'category_id'=>2],
            ['name' => 'Software','price'=>99,'category_id'=>1],
        ];
        foreach ($items as $item) {
            $model = new \App\Course();
            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }
            $model->save();
        }
    }
}
