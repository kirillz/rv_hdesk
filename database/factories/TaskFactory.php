<?php

namespace Database\Factories;

use App\Models\Task;
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
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(4,true),
            'start_date' => $this->faker->dateTimeInInterval('-30','+7','Europe/Moscow'),
            'due_date' => $this->faker->dateTimeInInterval('-30','+7','Europe/Moscow'),
       ];
    }
}