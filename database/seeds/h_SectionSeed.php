<?php

use Illuminate\Database\Seeder;

class h_SectionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'part one','description'=>'part describe','link'=>"public/video",'part'=>1,'course_id'=>1,'time'=>100],
            ['name' => 'part two','description'=>'part describe 2','link'=>"public/video1",'part'=>2,'course_id'=>1,'time'=>50],
            ['name' => 'great solution','link'=>"public/video_test",'part'=>1,'course_id'=>2,'time'=>120],
        ];
        foreach ($items as $item) {
            $model = new \App\Section();
            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }
            $model->save();
        }
    }
}
