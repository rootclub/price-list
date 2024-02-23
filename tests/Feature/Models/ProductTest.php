<?php declare(strict_types=1);

namespace Tests\Feature\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

/**
 * @var int
 */
const MODELS_COUNT = 3;

test('it can be persisted', function () {
    /** @var Collection<Product, int> $products */
    $products = Product::factory()
        ->count(MODELS_COUNT)
        ->create();

    expect(Product::count())
        ->toBe(MODELS_COUNT);

    /** @var Product $product */
    foreach ($products as $product) {
        $product->refresh();

        expect($product->id)
            ->not()
            ->toBeNull()
            ->toBeInt();

        expect($product->name)
            ->not()
            ->toBeNull()
            ->toBeString();

        expect($product->price)
            ->not()
            ->toBeNull()
            ->toBeFloat()
            ->toBeGreaterThanOrEqual(0);
    }
});
