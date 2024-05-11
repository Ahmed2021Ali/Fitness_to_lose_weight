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
                'name' => 'Difficult',
                'age' => '18-25',
                'fasting_system' =>'Alternate Day Fasting (ADF)',
            ],//1
            [
                'name' => 'Normal',
                'age' => '18-25',
                'fasting_system' =>'16/8 Method',
            ],  //2
            [
                'name' => 'Difficult',
                'age' => '26-35',
                'fasting_system' =>'20/4 Method (Warrior Diet)',
            ],//3
            [
                'name' => 'Normal',
                'age' => '26-35',
                'fasting_system' =>'18/6 Method',
            ],  //4
            [
                'name' => 'Difficult',
                'age' => '36-45',
                'fasting_system' =>'24-Hour Fast (Once or Twice a Week)',
            ],  //5
            [
                'name' => 'Normal',
                'age' => '36-45',
                'fasting_system' =>'14/10 Method (Condensed Eating Window)',
            ],  //6
            [
                'name' => 'Difficult',
                'age' => '+46',
                'fasting_system' =>'Alternate Day Fasting (ADF)',
            ],  //7
            [
                'name' => 'Normal',
                'age' => '+46',
                'fasting_system' =>'16/8 Method',
            ],  //8
        ];
        foreach ($plans as $plan) {
            \App\Models\Plan::create($plan);
        }
    }
}
