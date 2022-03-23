<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Car
 *
 * @property int $id
 * @property string $manufacturer
 * @property string $model
 * @property int $year
 * @property string $type
 * @property int $monthly_payment
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car query()
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereMonthlyPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereYear($value)
 * @mixin \Eloquent
 */
class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer',
        'model',
        'year',
        'type',
        'monthly_payment',
        'image',
    ];

    const TYPES = [
        'new_vehicle',
        'new_luxury',
        'new_jeep',
        'vehicle',
        'luxury',
        'jeep',
    ];

    protected $appends = [
        'image_url',
    ];

    public function imageUrl(): Attribute
    {
        return new Attribute(
            get: fn ($value, $attributes) => isset($attributes['image']) ? Storage::url($attributes['image']) : null,
        );
    }
}
