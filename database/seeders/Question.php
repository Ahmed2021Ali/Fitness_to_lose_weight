<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Question extends Seeder
{

    public function run(): void
    {
        DB::table('questions')->delete();
        $questions = [
            ['question' => 'What is your age'],  //1
            ['question' => 'what is your goal'], //2
            ['question' => 'what is your body type'],//3
            ['question' => 'what is the body you want'],//4
            ['question' => 'what is your target zone'],//5
            ['question' => 'what is takes up most of your time'],//6
            ['question' => 'when was the last time you were content with your body weight'],//7
            ['question' => 'Do you workout'],//8
            ['question' => 'how tired do you typically feel during the day'],//9
            ['question' => 'select all that you tend to do'],//10
            ['question' => 'how much do you usually sleep '],//11
            ['question' => 'how much water do you drink daily '],//12
            ['question' => 'choose the product you like '],//13
            ['question' => 'Do you follow any of these diets'],//14
            ['question' => 'IS there a special occasion you want to lose weight for'],//15
        ];
        foreach ($questions as $questions) {
            \App\Models\Question::create($questions);
        }
    }
}
