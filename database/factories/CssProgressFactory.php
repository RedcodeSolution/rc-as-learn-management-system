<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CssProgress>
 */
class CssProgressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'question' => $this->faker->randomElement(['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10']),
            'user_answer' => $this->faker->sentence(3),
            'correct_answer' => $this->faker->sentence(3),
            'is_correct' => $this->faker->boolean(),
            'correct_count' => $this->faker->numberBetween(0, 50),
            'wrong_count' => $this->faker->numberBetween(0, 50),
        ];
    }
}
