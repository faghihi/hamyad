<?php

use Illuminate\Database\Seeder;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'Sanaye Tv','description'=>'good TV'],
            ['name' => 'Vesta','description'=>'good company'],
        ];
        foreach ($items as $item) {
            $model = new \App\Provider();
            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }
            $model->save();
        }
    }
}
