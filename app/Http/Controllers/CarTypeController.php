<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarTypeController extends Controller
{
    public function __invoke(): array
    {
        return Car::TYPES;
    }
}
