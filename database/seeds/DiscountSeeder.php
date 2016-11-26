<?php

use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['code' => 'Q24234','count'=>10,'type'=>0,'value'=>10],
            ['code' => 'SanayeTV','count'=>1,'type'=>1,'value'=>10000],
        ];
        foreach ($items as $item) {
            $model = new \App\Discount();
            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }
            $model->save();
        }
    }
}
