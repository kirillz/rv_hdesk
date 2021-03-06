<?php

namespace Database\Factories;

use App\Models\Task;
use Faker\Provider\ru_RU\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $taskIds = Task::all()->pluck('id')->toArray();
        return [
            'task_id' => $this->faker->randomElement($taskIds),
            'name' => $this->faker->sentence(2, false),
            'description' => $this->faker->sentence(4, true),
            'task_start_date' => $this->faker->dateTimeInInterval('now', '+3 day', 'Europe/Moscow'),
            'task_due_date' => $this->faker->dateTimeInInterval('now', '+1 month', 'Europe/Moscow'),
       ];
    }
}
