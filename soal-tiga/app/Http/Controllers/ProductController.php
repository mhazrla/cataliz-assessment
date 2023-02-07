<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\UseCases\Product\GetAllProducts;
use App\UseCases\Product\SaveProduct;
use App\UseCases\Product\DeleteProduct;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index(GetAllProducts $useCase)
    {
        return response()->json([
            'data' => $useCase()
        ]);
    }

    public function store(Request $request, SaveProduct $useCase, $id = null)
    {
        return response()->json([
            'data' => $useCase($id, $request->all())
        ]);
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([null, Response::HTTP_NO_CONTENT], 204);
    }
}
