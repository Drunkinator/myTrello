<?php

namespace Database\Factories;

use App\Models\BoardUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Board;

class BoardUserFactory extends Factory
{
    protected $model = BoardUser::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'board_id' => Board::factory(),
            'created_at' => $this->faker->dateTimeThisYear,
            'updated_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
