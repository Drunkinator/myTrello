<?php

namespace Database\Factories;

use App\Models\Board;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class BoardFactory extends Factory
{
    protected $model = Board::class;

    public function definition()
    {
        User::factory()->create();
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->title,
            'description' => $this->faker->unique()->safeEmail,
            'created_at' => now(),
            'updated_at' => $this->faker->date(),
        ];
    }

}
