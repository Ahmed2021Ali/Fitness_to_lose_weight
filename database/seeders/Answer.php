<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Answer extends Seeder
{

    public function run(): void
    {
        DB::table('answers')->delete();
        $answers = [
            ['answer' => '18-25', 'question_id' => '1'],
            ['answer' => '26-35', 'question_id' => '1'],
            ['answer' => '36-45', 'question_id' => '1'],
            ['answer' => '+46', 'question_id' => '1'],
            ['answer' => 'weigjt loss', 'question_id' => '2'],
            ['answer' => 'muscle gain', 'question_id' => '2'],
            ['answer' => 'skinny', 'question_id' => '3'],
            ['answer' => 'regular', 'question_id' => '3'],
            ['answer' => 'extra plumb', 'question_id' => '3'],
            ['answer' => 'cut', 'question_id' => '4'],
            ['answer' => 'bulk', 'question_id' => '4'],
            ['answer' => 'extra bulk', 'question_id' => '4'],
            ['answer' => 'Abs', 'question_id' => '5'],
            ['answer' => 'Arms&Chest', 'question_id' => '5'],
            ['answer' => 'Legs', 'question_id' => '5'],
            ['answer' => 'sitting all day long at work', 'question_id' => '6'],
            ['answer' => 'i am always on my feet', 'question_id' => '6'],
            ['answer' => 'doing lots of physical activity', 'question_id' => '6'],
            ['answer' => '0-6 months ago', 'question_id' => '7'],
            ['answer' => '7-12 months ago', 'question_id' => '7'],
            ['answer' => '1-3 years ago', 'question_id' => '7'],
            ['answer' => 'No,I donot', 'question_id' => '8'],
            ['answer' => 'only walks', 'question_id' => '8'],
            ['answer' => '1-2 times a week', 'question_id' => '8'],
            ['answer' => 'i feel tierd all day long', 'question_id' => '9'],
            ['answer' => 'i feel tierd before meals', 'question_id' => '9'],
            ['answer' => 'i have a couple of afternoon yawns', 'question_id' => '9'],
            ['answer' => 'i eat late at night', 'question_id' => '10'],
            ['answer' => 'i love soft drinks', 'question_id' => '10'],
            ['answer' => 'i can not give up eating sweets', 'question_id' => '10'],
            ['answer' => 'i consume hard drinks from time to time', 'question_id' => '10'],
            ['answer' => 'i love faty or salty foods', 'question_id' => '10'],
            ['answer' => 'none of the above', 'question_id' => '10'],
            ['answer' => 'less than 5 hours', 'question_id' => '11'],
            ['answer' => '5-6 hours', 'question_id' => '11'],
            ['answer' => '7-8 hours', 'question_id' => '11'],
            ['answer' => 'more than 8 hours', 'question_id' => '11'],
            ['answer' => 'less than .5 L', 'question_id' => '12'],
            ['answer' => '.5-1.5 L', 'question_id' => '12'],
            ['answer' => '1.5-2.5 L', 'question_id' => '12'],
            ['answer' => 'more than 2.5 L', 'question_id' => '12'],
            ['answer' => 'I dont count,it depends ', 'question_id' => '12'],
            ['answer' => 'Select all', 'question_id' => '13'],
            ['answer' => 'viggies', 'question_id' => '13'],
            ['answer' => 'tomato', 'question_id' => '13'],
            ['answer' => 'cucumber', 'question_id' => '13'],
            ['answer' => 'Bell pepper', 'question_id' => '13'],
            ['answer' => 'onion', 'question_id' => '13'],
            ['answer' => 'spinach', 'question_id' => '13'],
            ['answer' => 'carrots', 'question_id' => '13'],
            ['answer' => 'cocktail tomayoes', 'question_id' => '13'],
            ['answer' => 'lettuce', 'question_id' => '13'],
            ['answer' => 'i am a lactose intolerant', 'question_id' => '14'],
            ['answer' => 'i dont eat gluten', 'question_id' => '14'],
            ['answer' => 'i am vegetarian', 'question_id' => '14'],
            ['answer' => 'i am vegan', 'question_id' => '14'],
            ['answer' => 'none of the above', 'question_id' => '14'],
            ['answer' => 'Vacation', 'question_id' => '15'],
            ['answer' => 'Wedding', 'question_id' => '15'],
            ['answer' => 'Sporting event', 'question_id' => '15'],
            ['answer' => 'Beach trip', 'question_id' => '15'],
            ['answer' => 'Reunion', 'question_id' => '15'],
            ['answer' => 'Family occasion', 'question_id' => '15'],
            ['answer' => 'other', 'question_id' => '15'],
        ];
        foreach ($answers as $answer) {
            \App\Models\Answer::create($answer);
        }
    }
}
