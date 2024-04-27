<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->string('fasting_status');
            $table->string('quantity_of_Water');
            $table->string('breakfast_meal');
            $table->string('breakfast_time');
            $table->string('lunch_meal');
            $table->string('lunch_time');
            $table->string('dinner_meal');
            $table->string('dinner_time');
            $table->foreignId('plan_id')->references('id')->on('plans')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
