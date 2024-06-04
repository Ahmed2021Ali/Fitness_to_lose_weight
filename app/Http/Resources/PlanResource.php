<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'plan_overview' => $this->plan_overview,
            'fasting_system' => $this->fasting_system,
            'meals' => MealResource::collection($this->meals),
        ];
    }
}
