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
            'manufacturer' => [
                'nullable',
                'string',
                'min:2',
                'max:255',
            ],
            'model' => [
                'nullable',
                'string',
                'min:2',
                'max:255',
            ],
            'year' => [
                'nullable',
                'integer',
                'min:1950',
                'max:' . date('Y'),
            ],
            'type' => [
                'nullable',
                'string',
                Rule::in(Car::TYPES),
            ],
            'min_monthly_payment' => [
                'nullable',
                'integer',
                'min:0',
                'max:100000',
            ],
            'max_monthly_payment' => [
                'nullable',
                'integer',
                'min:0',
                'max:100000',
            ],
        ];
    }
}
