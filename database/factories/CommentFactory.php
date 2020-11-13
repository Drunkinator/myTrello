<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Task;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'task_id' => Task::factory(),
            'text' => $this->faker->safeEmail,
            'created_at' => now(),
            'updated_at' => $this->faker->date(),
            //
        ];
    }
}
