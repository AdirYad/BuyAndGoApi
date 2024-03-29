<?php

namespace App\Http\Requests;

use App\Models\Car;
use App\Rules\ImageOrPath;
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
                'min:1',
                'max:255',
            ],
            'year' => [
                'required',
                'integer',
                'min:1950',
                'max:' . date('Y'),
            ],
            'type' => [
                'required',
                'string',
                Rule::in(Car::TYPES),
            ],
            'discount' => [
                'required',
                'integer',
                'min:0',
                'max:100000',
            ],
            'monthly_payment' => [
                'required',
                'integer',
                'min:1',
                'max:10000',
            ],
            'image' => [
                'required',
                new ImageOrPath,
            ]
        ];
    }

    public function attributes(): array
    {
        return [
            'manufacturer' => 'יצרן',
            'model' => 'דגם',
            'year' => 'שנה',
            'type' => 'סוג',
            'discount' => 'הנחה',
            'monthly_payment' => 'החזר חודשי',
        ];
    }
}
