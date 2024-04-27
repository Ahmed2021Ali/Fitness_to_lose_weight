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
                'name' => 'Normal',
                'age' => '18-24',
                'fasting_system' =>'16/8 Method',
            ],  //1
            [
                'name' => 'Difficult',
                'age' => '18-24',
                'fasting_system' =>'Alternate Day Fasting (ADF)',
            ],  //2
            [
                'name' => 'Normal',
                'age' => '25-40',
                'fasting_system' =>'18/6 Method',
            ],  //3
            [
                'name' => 'Difficult',
                'age' => '25-40',
                'fasting_system' =>'20/4 Method (Warrior Diet)',
            ],  //4
            [
                'name' => 'Normal',
                'age' => '40-61',
                'fasting_system' =>'14/10 Method (Condensed Eating Window)',
            ],  //5
            [
                'name' => 'Difficult',
                'age' => '40-61',
                'fasting_system' =>'24-Hour Fast (Once or Twice a Week)',
            ],  //6
        ];
        foreach ($plans as $plan) {
            \App\Models\Plan::create($plan);
        }
    }
}
