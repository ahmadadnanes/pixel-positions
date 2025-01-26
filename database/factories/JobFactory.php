<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => $this->faker->jobTitle,
            'salary' => $this->faker->randomFloat(2, 1000, 100000),
            'location' => $this->faker->city,
            'contract_type' => $this->faker->randomElement(['Full Time', 'Part Time', 'Contract', 'Temporary']),
            'url' => $this->faker->url,
            'featured' => $this->faker->boolean,
        ];
    }
}
