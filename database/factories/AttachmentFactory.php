<?php

namespace Database\Factories;

use App\Models\Attachment;
use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AttachmentFactory extends Factory
{
    protected $model = Attachment::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'task_id' => Task::factory(),
            'file' => $this->faker->name,
            'filename' => $this->faker->name,
            'size' => $this->faker->randomElement(['1mo', '1gb']),
            'type' => $this->faker->randomElement(['.zip', '.pdf']),
            'created_at' => now(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
