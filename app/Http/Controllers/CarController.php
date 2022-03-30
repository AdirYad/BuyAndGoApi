<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexCarRequest;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index(IndexCarRequest $request): Collection
    {
        $payload = $request->validated();

        return Car::when(isset($payload['type']), static function ($query) use ($payload) {
            $query->where('type', $payload['type']);
        })->when(isset($payload['manufacturer']), static function ($query) use ($payload) {
            $query->where('manufacturer', $payload['manufacturer']);
        })->when(isset($payload['model']), static function ($query) use ($payload) {
            $query->where('model', $payload['model']);
        })->when(isset($payload['year']), static function ($query) use ($payload) {
            $query->where('year', $payload['year']);
        })->when(isset($payload['min_monthly_payment']) && isset($payload['max_monthly_payment']), static function ($query) use ($payload) {
            $query->whereBetween('monthly_payment', [$payload['min_monthly_payment'], $payload['max_monthly_payment']]);
        })->orderByDesc('id')->get();
    }

    public function store(StoreCarRequest $request): Car
    {
        $payload = $request->validated();

        $image = $request->file('image');
        if ($image) {
            $payload['image'] = $image->storeAs('cars', uniqid().'.png');
        }

        return Car::create($payload);
    }

    public function show(Car $car): Car
    {
        return $car;
    }

    public function update(UpdateCarRequest $request, Car $car): Car
    {
        $payload = $request->validated();

        $image = $request->file('image');
        if ($image) {
            $payload['image'] = $image->storeAs('cars', uniqid().'.png');

            if (Storage::exists($car->image)) {
                Storage::delete($car->image);
            }
        }

        $car->update($payload);

        return $car->refresh();
    }

    public function destroy(Car $car): void
    {
        $car->delete();
    }
}
