<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Sneaker',
            'slug' => 'running',
        ]);

        Category::create([
            'name' => 'Giày đá bóng',
            'slug' => 'football',
        ]);

        Category::create([
            'name' => 'Boot',
            'slug' => 'boot',
        ]);

        Category::create([
            'name' => 'Slip On',
            'slug' => 'slip-on',
        ]);

        Category::create([
            'name' => 'Giày tây',
            'slug' => 'giay-tay',
        ]);
    }
}
