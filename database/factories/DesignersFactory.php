<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DesignersFactory extends Factory
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
            'image'=> $this->faker->imageUrl(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'description' => $this->faker->text(),
            'facebook' => $this->faker->url(), // Đặt trường 'facebook' thành kiểu URL và cho phép giá trị null
            'twitter' => $this->faker->url(),  // Đặt trường 'twitter' thành kiểu URL và cho phép giá trị null
            'instagram' => $this->faker->url(),  // Đặt trường 'instagram' thành kiểu URL và cho phép giá trị null
        ];
    }
}
