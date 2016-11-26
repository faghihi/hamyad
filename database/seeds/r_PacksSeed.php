<?php

use Illuminate\Database\Seeder;

class r_PacksSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['title' => 'best price','price_year'=>100000,'course_id'=>1,'pack_id'=>1],
            ['title' => 'best price','price_year'=>79,'pack_id'=>1,'course_id'=>2],
        ];
        foreach ($items as $item) {
            $model = new \App\Pack();
            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }
            $model->save();
        }
    }
}
