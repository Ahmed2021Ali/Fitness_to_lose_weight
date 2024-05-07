<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MealResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'day'=>$this->day,
            'fasting_status'=>$this->fasting_status,
            'quantity_of_Water'=>$this->quantity_of_Water,
            'breakfast_meal'=>$this->breakfast_meal,
            'breakfast_time'=>$this->breakfast_time,
            'lunch_meal'=>$this->lunch_meal,
            'lunch_time'=>$this->lunch_time,
            'dinner_meal'=>$this->dinner_meal,
            'dinner_time'=>$this->dinner_meal,
        ];
    }
}
