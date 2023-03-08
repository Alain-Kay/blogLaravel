<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * the name of the factory's coressponding model
     * 
     * @var string
     */
       // protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'subtitle' => $this->faker->sentence(),
            'content' => $this->faker->sentence()
        ];
    }
}
?>
