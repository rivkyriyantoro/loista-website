<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAllCategories()
    {
        $categories = Category::with('subcategory')->get();

        return response()->json($categories);
    }

    public function getCategoriesWithPagination(Request $request)
    {
        $page = $request->input('page', 10);

        $categories = Category::with('subcategory')->paginate($page);

        return response()->json($categories);
    }

    public function getCategoryById($id)
    {
        $category = Category::with('subcategory')->find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        return response()->json($category);
    }
}
