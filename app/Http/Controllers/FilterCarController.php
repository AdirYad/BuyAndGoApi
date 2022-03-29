<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;

class FilterCarController extends Controller
{
    public function __invoke(): Collection
    {
        return Car::query()
            ->groupBy('manufacturer', 'model')
            ->orderBy('manufacturer')
            ->get(['manufacturer', 'model'])
            ->groupBy('manufacturer');
    }
}
