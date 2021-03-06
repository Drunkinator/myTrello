<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Board;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
          'board_id' => Board::factory(),
          'category_id' => Category::factory(),
          'title' => $this->faker->title,
          'description' => $this->faker->unique()->safeEmail,
          'state' => $this->faker->randomElement(['paid', 'unpaid']),
          'created_at' => now(),
          'updated_at' => $this->faker->date(),
          'due_date' => $this->faker->date(),
            //
        ];
    }
}
