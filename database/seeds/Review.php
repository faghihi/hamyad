<?php

use Illuminate\Database\Seeder;

class Review extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['comment' => 'teacher is really cool','section_rate'=>4.5,'user_id'=>1],
            ['comment' => 'course is really cool','course_rate'=>2.5,'user_id'=>1],
            ['comment' => 'pack is really cool','section_rate'=>3,'user_id'=>2],
            ['comment' => 'pack is really cool','course_rate'=>3,'user_id'=>2]
        ];
        foreach ($items as $item) {
            $model = new \App\Review();
            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }
            $model->save();
        }
    }
}
