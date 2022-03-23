<?php

namespace App\Http\Requests;

use App\Models\Car;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCarRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'manufacturer' => [
                'required',
                'string',
                'min:2',
                'max:255',
            ],
            'model' => [
                'required',
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
                'required',
                'string',
                Rule::in(Car::TYPES),
            ],
            'monthly_payment' => [
                'required',
                'integer',
                'min:1',
                'max:100000',
            ],
            'image' => [
                'required',
                'image',
            ]
        ];
    }
}
