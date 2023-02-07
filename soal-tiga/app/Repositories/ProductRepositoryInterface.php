<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Entities\Product;

interface ProductRepositoryInterface
{
    public function all(): Collection;
    public function save($id = null, array $data): Product;
    public function destroy($id): Product;
}
