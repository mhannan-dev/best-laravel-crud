<?php

namespace Database\Factories;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(3),
            'price' => fake()->numberBetween(100,500),
            'status' => Status::DRAFT,
            'author_id' => User::factory(),
        ];
    }
}
