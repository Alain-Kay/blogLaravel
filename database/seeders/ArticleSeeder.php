<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::get()->each(function($category){
            \App\Models\Article::factory(5)->create([
                'category_id' => $category->id
            ]);
        });
    }
}

?>
