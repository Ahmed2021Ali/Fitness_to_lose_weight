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
            'Name' => $this->name,
            'Age' => $this->age,
            'fasting_system' => $this->fasting_system,
        ];
    }
}
