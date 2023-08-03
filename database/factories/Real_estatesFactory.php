<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Real_estate_categories;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Real_estatesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),       
            'description'=> $this->faker->text(),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'image'=> 'image/1690305649_img_6.jpg',
            'beds'=>$this->faker->numberBetween(1, 10),
            'baths'=>$this->faker->numberBetween(1, 10),
            'address' => $this->faker->address(),
            'real_estate_category_id' => function () {
                return Real_estate_categories::inRandomOrder()->first()->id;
            },
            'designer_id' =>$this->faker->numberBetween(1,10),
        ];
    }
}
