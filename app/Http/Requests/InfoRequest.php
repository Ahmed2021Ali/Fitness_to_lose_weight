<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'question_id' => ['nullable', 'exists:questions,id'],
            'answer_id' => ['nullable', 'exists:answers,id'],
            'weight' => ['nullable', 'numeric', 'min:0', 'max:450'],
            'height' => ['nullable', 'numeric', 'min:0', 'max:450'],
            'age' => ['nullable', 'numeric', 'min:0', 'max:100'],
        ];
    }
}
