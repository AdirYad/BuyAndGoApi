<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:50',
            ],
            'phone' => [
                'required',
                'string',
                'regex:/^0(5[^7]|[2-4]|[8-9]|7[0-9])[0-9]{7}$/'
            ],
            'message' => [
                'nullable',
                'string',
                'min:0',
                'max:50',
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'שם',
            'phone' => 'טלפון',
            'message' => 'הודעה',
        ];
    }
}
