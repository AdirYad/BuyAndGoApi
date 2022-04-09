<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarCountController extends Controller
{
    public function __invoke(): int
    {
        return Car::count();
    }
}
