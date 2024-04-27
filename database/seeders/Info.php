<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Info extends Seeder
{
    public function run(): void
    {
        \App\Models\Info::factory(50)->create();
    }
}
