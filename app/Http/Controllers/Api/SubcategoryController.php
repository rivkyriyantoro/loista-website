<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function getAllSubcategories()
    {
        $subcategories = Subcategory::all();
        return response()->json($subcategories);
    }

    public function getSubcategorywithProducts()
    {
        $subcategories = Subcategory::with('product')->get();
        return response()->json($subcategories);
    }

    public function getSubcategoryById($id)
    {
        $subcategory = Subcategory::with('product')->find($id);
        if (!$subcategory) {
            return response()->json([
                'status' => 'error',
                'message' => 'Subcategory not found',
            ], 404);
        }
        return response()->json($subcategory);
    }

    public function getSubcategoryByIdWithPagination($id, Request $request)
    {
        $page = $request->input('page', 10);

        $subcategory = Subcategory::with(['product' => function ($query) use ($page) {
            $query->paginate($page);
        }])->find($id);

        if (!$subcategory) {
            return response()->json([
                'status' => 'error',
                'message' => 'Subcategory not found',
            ], 404);
        }

        return response()->json($subcategory);
    }
}
