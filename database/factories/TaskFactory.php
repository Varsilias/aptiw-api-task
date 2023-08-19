<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(2),
            'due_date' => fake()->dateTimeBetween('-2 week', '+2 week'),
            'status' => fake()->randomElement(["Not Started", "In Progress", "Completed"]),
            'user_id' => fake()->randomElement([1,2,3,4,5,6,7,8,9,10])
        ];
    }
}
