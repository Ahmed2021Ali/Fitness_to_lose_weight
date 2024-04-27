<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Info>
 */
class InfoFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'question_id' => Question::all()->random()->id,
            'answer_id' => Answer::all()->random()->id,

        ];
    }
}
