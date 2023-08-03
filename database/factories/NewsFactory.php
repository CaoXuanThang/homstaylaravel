<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\New_categories;
use Illuminate\Database\Eloquent\Factories\Factory;


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
            'description' => Str::limit($this->faker->sentence(), 100), // Giới hạn độ dài mô tả thành 200 ký tự
            'image'=> 'image/1690305649_img_6.jpg',
            'long_description'=> $this->faker->paragraph(7,true),
            'news_category_id'=> $this->faker->numberBetween(1,10),
        ];
    }
}
