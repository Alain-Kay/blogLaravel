<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory;
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
                'content' => $faker->text($maxNbChars = 400),
            ]);
            
        }
    }
}
