<?php

use Illuminate\Database\Seeder;

class h_TagsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [
            ['tag_name' => 'Programming'],
            ['tag_name' => 'Social'],
            ['tag_name' => 'sanaye'],
            ['tag_name' => 'Web'],
        ];
        foreach ($items as $item) {
            $model = new \App\Tag();
            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }
            $model->save();
        }
    }
}
