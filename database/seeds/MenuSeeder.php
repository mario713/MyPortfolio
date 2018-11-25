<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        DB::table('menu')->insert(
            ['name' => 'Main Page', 'icon' => 'iHome', 'url' => '/', 'order' => '1']
        );

        DB::table('menu')->insert(
            ['name' => 'News', 'icon' => 'iBlog', 'url' => '/', 'order' => '2']
        );

        DB::table('menu')->insert(
            ['name' => 'Tutorials', 'icon' => 'iDocs', 'url' => '/', 'order' => '3']
        );

        DB::table('menu')->insert(
            ['name' => 'Tools', 'icon' => 'iTools', 'url' => '/', 'order' => '4']
        );

        DB::table('menu')->insert(
            ['name' => 'Resources', 'icon' => 'iFiles', 'url' => '/', 'order' => '5']
        );

        DB::table('menu')->insert(
            ['name' => 'Portfolio', 'icon' => 'iPortfolio', 'url' => '/', 'order' => '6']
        );

        DB::table('menu')->insert(
            ['name' => 'Contact', 'icon' => 'iContact', 'url' => '/', 'order' => '7']
        );

    }
}
