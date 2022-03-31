<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImageOrPath implements Rule
{
    private string $message;

    public function __construct()
    {
        $this->message = 'התמונה אינה חוקית';
    }

    public function passes($attribute, $value): bool
    {
        $isImage = Validator::make(['value' => $value], ['value' => 'image'])->passes();

        if ($isImage) {
            $isSize = Validator::make(['value' => $value], ['size' => '5120'])->passes();

            if (! $isSize) {
                $this->message = 'התמונה צריכה להיות מתחת ל 5 MB';

                return false;
            }

            return true;
        }

        if (! is_string($value)) {
            return false;
        }

        return Storage::exists($value);
    }

    public function message(): string
    {
        return $this->message;
    }
}
