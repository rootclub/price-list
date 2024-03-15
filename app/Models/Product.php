<?php declare(strict_types=1);

namespace App\Models;

use Cknow\Money\Casts\MoneyDecimalCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product.
 */
final class Product extends Model
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'price' => MoneyDecimalCast::class . ':EUR,true',
    ];

    /**
     * {@inheritdoc}
     */
    protected $guarded = [
        'id',
    ];
}
