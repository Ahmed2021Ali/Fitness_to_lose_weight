<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InfoUsers extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'age' => $this->age,
            'weight' => $this->weight,
            'height' => $this->height,
            'BMI' => ($this->weight / ($this->height ?? 1)) * ($this->height??1),
            'BMR' => 88.362 + (13.197 * ($this->weight??1)) + (4.799 * ($this->height??1)) - (5.677 * $this->age),
            'info' => InfoResource::collection($this->info),

        ];
    }
}
