<?php

use Illuminate\Database\Seeder;
use App\Category;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        $category = new Category();
        $category->name = 'Local';
        $category->order = 1;
    }
}
