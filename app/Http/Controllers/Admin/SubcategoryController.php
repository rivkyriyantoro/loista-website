<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SubcategoryController extends Controller
{
    public function index()
    {
        return view('admin.subcategory');
    }
    public function reloadCategory(Request $request)
    {
        $query = $request->q;

        if ($query) {
            $category = Category::where('name_category', 'like', '%' . $query . '%')->get(['id_category', 'name_category']);
        } else {
            $category = Category::select('id_category', 'name_category')->get('id_category', 'name_category');
        }

        return response()->json($category);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_subcategory' => 'required|string|max:255',
            'id_category' => 'required|integer',
            'image_subcategory' => 'nullable|string', // Handle base64 or file
        ]);

        // Check if the image is base64
        if (substr($data['image_subcategory'], 0, 5) === 'data:') {
            $image = $data['image_subcategory'];
            // Extract base64 data without the prefix
            $image = substr($image, strpos($image, ',') + 1);
            $image = base64_decode($image);

            // Create a unique name for the image
            $imageName = time() . '.png';
            $imagePath = public_path('images/subcategory/' . $imageName);

            // Save the image to the storage
            file_put_contents($imagePath, $image);

            // Save image path to database
            $subcategory = new SubCategory();
            $subcategory->name_subcategory = $data['name_subcategory'];
            $subcategory->id_category = $data['id_category'];
            $subcategory->image_subcategory = $imageName;
            $subcategory->save();
        } else {
            // Handle regular file upload (fallback)
            if ($request->hasFile('image_subcategory')) {
                $imageName = time() . '.' . $request->file('image_subcategory')->getClientOriginalExtension();
                $image = $request->file('image_subcategory');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/subcategory'), $imageName);

                // Save image path to database
                $subcategory = new SubCategory();
                $subcategory->name_subcategory = $data['name_subcategory'];
                $subcategory->id_category = $data['id_category'];
                $subcategory->image_subcategory = $imageName;
                $subcategory->save();
            }
        }

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menambahkan subkategori',
        ]);
    }


    public function ubah(Request $request, int $id)
    {
        Log::info($request->all());
        $request->validate([
            'name_subcategory' => 'required|string|max:255',
            'id_category' => 'required|integer', // Handle base64 or file
        ]);

        if ($request->e_image_subcategory != null) {
            if (substr($request->e_image_subcategory, 0, 5) === 'data:') {
                $image = $request->e_image_subcategory;
                // Extract base64 data without the prefix
                $image = substr($image, strpos($image, ',') + 1);
                $image = base64_decode($image);

                // Create a unique name for the image
                $imageName = time() . '.png';
                $imagePath = public_path('images/subcategory/' . $imageName);

                // Save the image to the storage
                file_put_contents($imagePath, $image);

                // Save image path to database
                Subcategory::where('id_subcategory', $id)->update([
                    'name_subcategory' => $request->name_subcategory,
                    'id_category' => $request->id_category,
                    'image_subcategory' => $imageName,
                ]);
                return response()->json([
                    'status' => 200,
                    'message' => 'Berhasil mengubah subkategori',
                ]);
            } else {
                // Handle regular file upload (fallback)
                if ($request->hasFile('e_image_subcategory')) {
                    $imageName = time() . '.' . $request->file('e_image_subcategory')->getClientOriginalExtension();
                    $image = $request->file('e_image_subcategory');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images/subcategory'), $imageName);

                    // Save image path to database
                    Subcategory::where('id_subcategory', $id)->update([
                        'name_subcategory' => $request->name_subcategory,
                        'id_category' => $request->id_category,
                        'image_subcategory' => $imageName,
                    ]);
                    return response()->json([
                        'status' => 200,
                        'message' => 'Berhasil mengubah subkategori',
                    ]);
                }
            }
        } else {
            Subcategory::where('id_subcategory', $id)->update([
                'name_subcategory' => $request->name_subcategory,
                'id_category' => $request->id_category,
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Berhasil mengubah subkategori',
            ]);
        }
    }


    public function data()
    {
        return datatables(Subcategory::join('categories', 'subcategories.id_category', 'categories.id_category')
            ->select('id_subcategory', 'categories.name_category as name_category', 'categories.id_category as id_category', 'name_subcategory', 'image_subcategory'))->addIndexColumn()->make(true);
    }

    public function hapus(int $id)
    {
        Subcategory::where('id_subcategory', $id)->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menghapus subkategori',
        ]);
    }
}
