<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            Plan::class,
            \Database\Seeders\User::class,
            Question::class,
            Answer::class,
            Info::class,
           Meal::class
        ]);
    }
}
