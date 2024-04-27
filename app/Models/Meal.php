<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $fillable=['day','fasting_status','quantity_of_Water','breakfast_meal','breakfast_time'
    ,'lunch_meal','lunch_time','dinner_meal','dinner_time','plan_id'];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
