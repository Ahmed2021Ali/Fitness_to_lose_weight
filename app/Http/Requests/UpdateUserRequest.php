<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'age' => ['nullable', 'string', 'max:255'],
            'height' => ['nullable', 'string', 'max:255'],
            'weight' => ['nullable', 'string', 'max:255'],
            'diseases' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable','email',Rule::unique('users','email')->ignore($this->user()->id, 'id')],
            'password' => ['nullable','min:8', 'confirmed'],
        ];
    }
}
