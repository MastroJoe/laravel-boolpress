<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = ['arte', 'cucina', 'cultura', 'moda', 'musica', 'tecnologia', 'videogiochi'];

      foreach ($categories as $category) {
        $category_obj = new Category();
        $category->name = $category;
        $category->slug = Str::slug($category, '-');

        $category->save();
      }
    }
}
