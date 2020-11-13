<?php

namespace Database\Factories;

use App\Models\TaskUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;
use App\Models\User;

class taskUserFactory extends Factory
{
    protected $model = TaskUser::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'task_id' => Task::factory(),
            'created_at' => now(),
            'updated_at' => $this->faker->date(), 
           //
        ];
    }
}
