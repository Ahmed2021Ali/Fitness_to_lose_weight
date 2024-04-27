<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InfoResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'question' => $this->question->question,
            'answer' => $this->answer->answer,
        ];
    }
}
