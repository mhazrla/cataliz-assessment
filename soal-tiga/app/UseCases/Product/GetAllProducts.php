<?php

namespace App\UseCases\Product;

use App\Repositories\ProductRepository;

class GetAllProducts
{

    protected $repository;


    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        return $this->repository->all();
    }
}
