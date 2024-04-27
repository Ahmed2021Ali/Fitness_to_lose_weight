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
            $table->string('fasting_status')->nullable();
            $table->string('quantity_of_Water')->nullable();
            $table->string('breakfast_meal')->nullable();
            $table->string('breakfast_time')->nullable();
            $table->string('lunch_meal')->nullable();
            $table->string('lunch_time')->nullable();
            $table->string('dinner_meal')->nullable();
            $table->string('dinner_time')->nullable();
            $table->string('plan_id');
            //$table->foreignId('plan_id')->references('id')->on('plans')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
