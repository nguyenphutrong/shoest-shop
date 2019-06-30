<?php

use Illuminate\Database\Seeder;
Use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category();
        $cat->name = 'Running';
        $cat->slug = 'running';
        $cat->save();

        $cat = new Category();
        $cat->name = 'Sneaker';
        $cat->slug = 'sneaker';
        $cat->save();

        $cat = new Category();
        $cat->name = 'Football';
        $cat->slug = 'football';
        $cat->save();

        $cat = new Category();
        $cat->name = 'Boot';
        $cat->slug = 'boot';
        $cat->save();

        $cat = new Category();
        $cat->name = 'Slip On';
        $cat->slug = 'slip-on';
        $cat->save();
    }
}
