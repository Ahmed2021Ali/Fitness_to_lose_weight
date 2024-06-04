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
            ['question' => 'According To Your Age?'],
            ['question' => 'Do You Have Diabetes? '],
            ['question' => 'Chose your goal please select your main? '],
            ['question' => 'Chose your body type?'],
            ['question' => 'Chose your body you want? '],
            ['question' => 'Chose your target zones?'],
            ['question' => 'How do you typically spend your day?'],
            ['question' => 'When was the last time you were content with your body weight ?'],
            ['question' => 'Do you workout?'],
            ['question' => 'How tired do you typically feel during the day?'],
            ['question' => 'Select all that you tend to do'],
            ['question' => 'How much do you usually sleep?   '],
            ['question' => 'How much water do you drink daily? '],
            ['question' => 'Is there a special occasion you want to lose weight for? '],
            ['question' => 'How often would you rate your relationship with food as good or excellent?  '],
            ['question' => 'How long have you been working towards your weight loss goals? '],
            ['question' => 'When do you usually have your first meal?  '],
            ['question' => 'When do you usually have your last meal? '],
            ['question' => 'How often do you usually eat during the day? '],
            ['question' => 'What is activity level?'],
            ['question' => 'What’s your gender?'],
        ];
        foreach ($questions as $questions) {
            \App\Models\Question::create($questions);
        }
    }
}
