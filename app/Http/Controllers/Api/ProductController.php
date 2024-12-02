<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function getProductById($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product not found',
            ], 404);
        }

        return response()->json($product);
    }

    public function grtProductByPromoStatus($is_promo)
    {
        $products = Product::where('is_promo', $is_promo)->get();
        return response()->json($products);
    }
}
