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
        return view('admin.pages.products');
    }
    public function add_product()
    {
        $categories=Category::all();
        $brands=Brand::all();
        $suppliers=Supplier::all();
        $units=Unit::all();
        return view('admin.pages.add-product',compact('categories','brands','suppliers','units'));
    }
    
    public function add_product_post(Request $request)
    {
        $validate = $request->validate([
            'name'=> 'required|string',
            'category'=> 'required|string',
            'brand'=> 'required|string',
            'supplier'=> 'required|string',
            'unit'=> 'required|string',
            'sku'=> 'required|numeric',
            'quantity'=> 'required|numeric',
            'buy_price'=> 'required|numeric',
            'sell_price'=> 'required|numeric',
            'photo'=> 'nullable|image|max:2048|mimes:jpg,jpeg,png,webp,gif',
        ]);
        $product = new Product();
        $product->name = $validate['name'];
        $product->category_id = $validate['category'];
        $product->brand_id = $validate['brand'];
        $product->supplier_id = $validate['supplier'];
        $product->unit_id = $validate['unit'];
        $product->sku = $validate['sku'];
        $product->quantity = $validate['quantity'];
        $product->buy_price = $validate['buy_price'];
        $product->sell_price = $validate['sell_price'];
        if($request->file('photo'))
        {
            $path=Storage::disk('public')->put('products',$request->file('photo'));
            $product->image = $path;
        }
        $product->save();

        return redirect()->back()->with('message','Товар успешно добавлено!');

    }
}
