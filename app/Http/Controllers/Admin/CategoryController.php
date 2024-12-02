<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.category');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nameCategory' => 'required',
        ]);

        $category = Category::create([
            'name_category' => $request->nameCategory
        ]);

        if ($category) {
            # code...
            return response()->json([
                'status' => 200,
                'message' => 'Berhasil menambahkan kategori',
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'failed',
            ]);
        }
    }

    public function data()
    {
        return datatables(Category::select('id_category','name_category')->orderBy('name_category'))->addIndexColumn()->make(true);
    }

    public function ubah(Request $request, int $id)
    {
        $request->validate([
            'nameCategory' => 'required',
        ]);


        Category::where('id_category', $id)->update([
            'name_category' => $request->nameCategory,
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil mengubah kategori',
        ]);
    }


    public function hapus(int $id)
    {
        Category::where('id_category', $id)->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menghapus kategori',
        ]);
    }
}
