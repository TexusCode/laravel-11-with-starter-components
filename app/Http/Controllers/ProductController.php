<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::paginate(25);
        return view('admin.pages.products', compact('products'));
    }
    public function add_product()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $suppliers = Supplier::all();
        $units = Unit::all();
        return view('admin.pages.add-product', compact('categories', 'brands', 'suppliers', 'units'));
    }

    public function add_product_post(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'brand' => 'required|string',
            'supplier' => 'required|string',
            'unit' => 'required|string',
            'sku' => 'required|numeric',
            'quantity' => 'required|numeric',
            'buy_price' => 'required|numeric',
            'sell_price' => 'required|numeric',
            'photo' => 'nullable|image|max:2048|mimes:jpg,jpeg,png,webp,gif',
        ]);

        $product = new Product();
        $product->name = $validate['name'];
        $product->category_id = $validate['category'];
        $product->brand_id = $validate['brand'];
        $product->supplier = $validate['supplier'];
        $product->unit_id = $validate['unit'];
        $product->sku = $validate['sku'];
        $product->quantity = $validate['quantity'];
        $product->buy_price = $validate['buy_price'];
        $product->sell_price = $validate['sell_price'];
        if ($request->hasfile('photo')) {
            $path = Storage::disk('public')->put('products', $request->file('photo'));
            $product->image = $path;
        }
        $product->save();

        return redirect()->route('products')->with('message', 'Товар успешно добавлено!');
    }

    public function product_search(Request $request)
    {
        $request->validate([
            'search' => 'required|string|max:255',
        ]);

        $search = $request->search;

        $products = Product::where('name', 'like', "%$search%")
            ->orWhere('sku', 'like', "%$search%")
            ->paginate(25);

        return view('admin.pages.products', compact('products'));
    }

    public function delete_product_post($id)
    {
        $product = Product::findOrFail($id)->delete();

        return redirect()->back()->with('message', 'Товар успешно удалено!');
    }
}
