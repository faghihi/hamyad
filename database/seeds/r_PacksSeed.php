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
            ['title' => 'best price','price_year'=>100000,'price_day'=>1000,'price_month'=>10000],
            ['title' => 'best price','price_year'=>79,'price_day'=>9,'price_month'=>29],
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
