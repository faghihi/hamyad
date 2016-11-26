<?php

use Illuminate\Database\Seeder;

class h_TeachersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'hossein faghihi','description'=>'teaher of web design','phone'=>"091312312"],
            ['name' => 'roshanak mirzaee','description'=>'teaher of web','phone'=>"09113123",'email'=>'abc@gah.com'],
            ['name' => 'reza ghanbari','description'=>'teaher of web Dev','phone'=>"09113123"],
        ];
        foreach ($items as $item) {
            $model = new \App\Teacher();
            foreach ($item as $key => $value) {
                $model->{$key} = $value;
            }
            $model->save();
        }
    }
}
