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
        })->get();
    }

    public function store(StoreCarRequest $request): Car
    {
        $payload = $request->validated();

        $image = $request->file('image');
        if ($image) {
            $payload['image'] = $image->storeAs('image', uniqid().'.png');
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
            $payload['image'] = $image->storeAs('image', uniqid().'.png');

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
