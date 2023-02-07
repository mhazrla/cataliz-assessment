<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Entities\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function all(): Collection
    {
        return Product::all();
    }

    public function save($id = null, array $data): Product
    {
        return Product::updateOrCreate([
            'id' => $id
        ], $data);
    }

    public function destroy($id): Product
    {
        return Product::destroy([
            'id' => $id
        ]);
    }
}
