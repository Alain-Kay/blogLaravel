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
        $faker = Factory::create();
        for ($i=0; $i <11 ; $i++) { 
            Article::create([
                'title' => $faker->sentence(),
                'subtitle' => $faker->sentence(),
                'content' => $faker->sentence(),
                'category_id' => Category::inRandomOrder()->first()->id
                
            ]);
            
        }
    }
}
