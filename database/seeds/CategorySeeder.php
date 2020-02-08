<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Laravel', 'Lumen', 'Kirby', 'Moodle', 'Infection', 'OctoberCMS', 'PrestaShop', 'Statamic', 'Wordpress'
        ];

        collect($categories)->each(function ($item) {
            \App\Models\Category::create([
                'title' => $item,
                'slug' => str_slug($item, '-')
            ]);
        });
    }
}
