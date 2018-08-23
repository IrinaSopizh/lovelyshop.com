<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesData = array(
            array('name' => 'СУМКИ'),
            array('name' => 'РЮКЗАКИ'),
            array('name' => 'ПОРТМОНЕ'),
            array('name' => 'ТРЕВЕЛ-КЕЙСИ'),
            array('name' => 'АКСЕСУАРИ'),
            array('name' => 'ПРИКРАСИ'),
            array('name' => 'РЕМНІ'),
            array('name' => 'КОЛЕКЦІЇ, НАБОРИ')
        );
        DB::table('categories')->delete();
        foreach ($categoriesData as $cat) {
            DB::table('categories')->insert([
                'name' => $cat['name']
            ]);
        } 
    }
}
