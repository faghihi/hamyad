<?php

use Illuminate\Database\Seeder;

class r_CategoryTagSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=\App\Category::all();
        foreach ($categories as $category)
        {
            $category->tags()->attach(2);
            $category->tags()->attach(3);
        }
    }
}
