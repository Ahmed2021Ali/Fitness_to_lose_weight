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
            ['answer' => 'Yes ', 'question_id' => '2'],
            ['answer' => 'No', 'question_id' => '2'],
            ['answer' => 'weight loss ', 'question_id' => '3'],
            ['answer' => 'Muscle Gain', 'question_id' => '3'],
            ['answer' => 'Skinny', 'question_id' => '4'],
            ['answer' => 'Regular', 'question_id' => '4'],
            ['answer' => 'Extra plumb', 'question_id' => '4'],
            ['answer' => 'cut', 'question_id' => '5'],
            ['answer' => 'Bulk', 'question_id' => '5'],
            ['answer' => 'Extra Bulk', 'question_id' => '5'],
            ['answer' => 'Abs', 'question_id' => '6'],
            ['answer' => 'Arms & chest', 'question_id' => '6'],
            ['answer' => 'Legs', 'question_id' => '6'],
            ['answer' => 'sitting all day long at work', 'question_id' => '7'],
            ['answer' => 'I’m always on my feet', 'question_id' => '7'],
            ['answer' => 'Doing lots of physical activity)', 'question_id' => '7'],
            ['answer' => '0-6 months ago', 'question_id' => '8'],
            ['answer' => '7-12 months ago', 'question_id' => '8'],
            ['answer' => '1-3 years ago', 'question_id' => '8'],
            ['answer' => 'no, I don’t', 'question_id' => '9'],
            ['answer' => 'only walks', 'question_id' => '9'],
            ['answer' => '1-2 times a week', 'question_id' => '9'],
            ['answer' => 'I feel tired all day long', 'question_id' => '10'],
            ['answer' => 'I feel tired before meals', 'question_id' => '10'],
            ['answer' => 'I have a couple of afternoon yawns', 'question_id' => '10'],
            ['answer' => 'I eat late at night', 'question_id' => '11'],
            ['answer' => 'I love soft drinks', 'question_id' => '11'],
            ['answer' => 'I can’t give up eating sweets', 'question_id' => '11'],
            ['answer' => 'I consume hard drinks from time to time', 'question_id' => '11'],
            ['answer' => 'I love fatty or salty foods', 'question_id' => '11'],
            ['answer' => 'none of the above', 'question_id' => '11'],
            ['answer' => 'less than 5 hours', 'question_id' => '12'],
            ['answer' => '5-6 hours', 'question_id' => '12'],
            ['answer' => '7-8 hours', 'question_id' => '12'],
            ['answer' => 'more than 8 hours', 'question_id' => '12'],
            ['answer' => 'less than 0.5L', 'question_id' => '13'],
            ['answer' => '0.5-1.5L', 'question_id' => '13'],
            ['answer' => '1.5-2.5L', 'question_id' => '13'],
            ['answer' => 'more than 2.5L', 'question_id' => '13'],
            ['answer' => 'I don’t count ; it depends', 'question_id' => '13'],
            ['answer' => 'vacation', 'question_id' => '14'],
            ['answer' => 'wedding', 'question_id' => '14'],
            ['answer' => 'sporting event', 'question_id' => '14'],
            ['answer' => 'Beach trip', 'question_id' => '14'],
            ['answer' => 'Reunion', 'question_id' => '14'],
            ['answer' => 'Family occasion', 'question_id' => '14'],
            ['answer' => 'Other', 'question_id' => '14'],
            ['answer' => 'always', 'question_id' => '15'],
            ['answer' => 'most of the time', 'question_id' => '15'],
            ['answer' => 'some of the time', 'question_id' => '15'],
            ['answer' => 'rarely', 'question_id' => '15'],
            ['answer' => 'Haven’t started yet', 'question_id' => '16'],
            ['answer' => 'Less than a month', 'question_id' => '16'],
            ['answer' => '2-6 months', 'question_id' => '16'],
            ['answer' => '6-12 months', 'question_id' => '16'],
            ['answer' => 'Over a year', 'question_id' => '16'],
            ['answer' => '8:00 AM', 'question_id' => '17'],
            ['answer' => '9:00 AM', 'question_id' => '17'],
            ['answer' => '10 :00 AM', 'question_id' => '17'],
            ['answer' => 'Other', 'question_id' => '17'],
            ['answer' => '7:00 PM', 'question_id' => '18'],
            ['answer' => '8:00 PM', 'question_id' => '18'],
            ['answer' => '9 :00 PM', 'question_id' => '18'],
            ['answer' => 'Other', 'question_id' => '18'],
            ['answer' => '1-2 times', 'question_id' => '19'],
            ['answer' => '3-4 times', 'question_id' => '19'],
            ['answer' => '5 and more', 'question_id' => '19'],



        ];        foreach ($answers as $answer) {
            \App\Models\Answer::create($answer);
        }
    }
}
