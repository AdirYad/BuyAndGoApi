<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Collection;

class FilterCarController extends Controller
{
    public function __invoke(): array
    {
        return [
            'manufacturers' => $this->distinctManufacturers(),
            'models' => $this->distinctModels(),
            'max_monthly_payment' => $this->maxMonthlyPayment(),
        ];
    }

    private function maxMonthlyPayment(): int
    {
        return Car::select('monthly_payment')->max('monthly_payment') ?? 0;
    }

    private function distinctManufacturers(): Collection
    {
        return Car::query()
            ->distinct('manufacturer')
            ->get('manufacturer')
            ->map(static function (Car $car) {
                return $car->manufacturer;
            });
    }

    private function distinctModels(): Collection
    {
        return Car::query()
            ->distinct('model')
            ->get('model')
            ->map(static function (Car $car) {
                return $car->model;
            });
    }
}
