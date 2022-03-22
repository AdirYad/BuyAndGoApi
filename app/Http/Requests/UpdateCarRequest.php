<?php

namespace App\Http\Requests;

use App\Models\Car;
use App\Rules\ImageOrPath;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCarRequest extends FormRequest
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
                new ImageOrPath,
            ]
        ];
    }
}
