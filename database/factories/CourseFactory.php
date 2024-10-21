<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'teacher' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'time' => $this->faker->numberBetween(1, 10),
            'collection' => $this->faker->numberBetween(1000, 5000),
        ];
    }
}
