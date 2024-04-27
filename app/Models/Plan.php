<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable=['name','age','fasting_system'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}
