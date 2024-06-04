<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Plan extends Seeder
{

    public function run(): void
    {
        DB::table('plans')->delete();
        $plans = [
            [
                'fasting_system' =>'Alternate Day Fasting (ADF) (24-Hour Fast)',
                'Plan_overview'=>' Alternate Day Fasting involves alternating between a day of eating normally and a day of fasting.',
            ],//1
            [

                'fasting_system' =>'16/8 Method',
                'Plan_overview'=>'The 16/8 Method involves a daily fasting period of 16 hours, with an 8-hour eating window. ',
            ],  //2
            [

                'fasting_system' =>'5:2 Method',
                'plan_overview'=>'the 5:2 Method involves normal eating for five days of the week and fasting for 24 hours on the other two days',

            ],  //3

        ];
        foreach ($plans as $plan) {
            \App\Models\Plan::create($plan);
        }
    }
}
