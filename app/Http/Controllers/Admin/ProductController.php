<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function data()
    {
        Log::info('Data Product');
        return datatables(Product::join('subcategories', 'subcategories.id_subcategory', 'products.id_subcategory')
            ->select('id_product', 'name_product', 'subcategories.name_subcategory as name_subcategory', 'price', 'description', 'discount_price', 'image_product'))->addIndexColumn()->make(true); // Ambil data produk terlebih dahulu

    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        Log::info($request->all());

        // Validasi data yang diterima
        $validated = $request->validate([
            'name_product' => 'required',
            'id_subcategory' => 'required',
            'SKU' => 'required',
            'price' => 'required|numeric',
            'image_product' => 'nullable|image',  // Pastikan validasi file sesuai
            'description' => 'required',
        ]);

        // Cek jika ada file yang di-upload
        if ($request->hasFile('image_product')) {
            $image = $request->file('image_product');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $validated['image_product'] = $imageName;
        }

        // Cek apakah ada promo
        if ($request->is_promo == 1) {
            $validated['is_promo'] = 1;

            if (!$request->has('promo') || $request->promo <= 0) {
                return response()->json([
                    'status' => 400,
                    'message' => 'Promo must be greater than 0',
                ]);
            }

            $promo = $request->promo;
            $discount_price = $validated['price'] - ($validated['price'] * ($promo / 100));
            $validated['discount_price'] = $discount_price;
        } else {
            $validated['is_promo'] = 0;
            $validated['discount_price'] = null;
        }

        // Menyimpan produk ke database
        $product = new Product();
        $product->id_subcategory = $validated['id_subcategory'];
        $product->name_product = $validated['name_product'];
        $product->SKU = $validated['SKU'];
        $product->price = $validated['price'];
        $product->discount_price = $validated['discount_price'];
        $product->is_promo = $validated['is_promo'];
        $product->description = $validated['description'];
        $product->image_product = $validated['image_product'] ?? null;
        $product->promo = $request->promo ?? null;
        $product->save();

        // Respons sukses
        return response()->json([
            'status' => 200,
            'message' => 'Product successfully added',
        ]);
    }

    public function reloadSubcategory(Request $request)
    {
        $query = $request->q;
        Log::info($request->all());
        if ($query) {
            $subcategory = Subcategory::where('name_subcategory', 'like', '%' . $query . '%')->get(['id_subcategory', 'name_subcategory']);
        } else {
            $subcategory = Subcategory::select('id_subcategory', 'name_subcategory')->get('id_subcategory', 'name_subcategory');
        }

        return response()->json($subcategory);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $subcategories = Subcategory::all(); // Menampilkan semua subkategori (sesuaikan dengan kebutuhan Anda)

        return view('admin.products.edit', compact('product', 'subcategories'));
    }

    public function update(Request $request, $id)
    {
        Log::info($request->all());

        // Validasi data yang diterima
        $validated = $request->validate([
            'name_product' => 'required',
            'id_subcategory' => 'required',
            'SKU' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        // Menyiapkan data yang akan diupdate
        $updateData = [
            'name_product' => $request->name_product,
            'id_subcategory' => $request->id_subcategory,
            'SKU' => $request->SKU,
            'price' => $request->price,
            'description' => $request->description,
        ];

        // Cek apakah ada promo
        if ($request->is_promo == 1) {
            // Validasi promo
            if (!$request->has('promo') || $request->promo <= 0) {
                return response()->json([
                    'status' => 400,
                    'message' => 'Promo must be greater than 0',
                ]);
            }

            // Hitung harga diskon
            $promo = $request->promo;
            $discount_price = $request->price - ($request->price * ($promo / 100));

            $updateData['is_promo'] = 1;
            $updateData['promo'] = $promo;
            $updateData['discount_price'] = $discount_price;
        } else {
            $updateData['is_promo'] = 0;
            $updateData['discount_price'] = null;
            $updateData['promo'] = null;
        }

        // Cek jika ada file yang di-upload
        if ($request->hasFile('image_product')) {
            $image = $request->file('image_product');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $updateData['image_product'] = $imageName;
        }

        // Perbarui data produk dengan query builder
        $updateResult = Product::where('id_product', $id)
            ->update($updateData);

        // Cek apakah ada perubahan yang berhasil
        if ($updateResult) {
            return view('admin.products.index');
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to update product',
            ]);
        }
    }

    public function hapus(int $id)
    {
        Product::where('id_product', $id)->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Product successfully deleted',
        ]);
    }
}
