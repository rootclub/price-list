<?php declare(strict_types=1);

namespace App\Models;

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
        'price' => 'float',
    ];

    /**
     * {@inheritdoc}
     */
    protected $guarded = [
        'id',
    ];
}
