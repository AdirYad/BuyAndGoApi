<?php

namespace App\Http\Requests;

use App\Models\Car;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class IndexCarRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => [
                'nullable',
                'string',
                Rule::in(Car::TYPES),
            ],
        ];
    }
}
