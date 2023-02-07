<?php

namespace App\UseCases\Product;

use App\Repositories\ProductRepository;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class DeleteProduct
{
    protected $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($id)
    {
        return $this->repository->destroy($id);
    }
}
