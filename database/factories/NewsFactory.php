<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\New_categories;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->title(),
            'description'=> $this->faker->text(),
            'image'=> $this->faker->imageUrl(),
            'news_category_id'=> $this->faker->numberBetween(1,10),
        ];
    }
}
