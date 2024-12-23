<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function brands()
    {
        $brands = Brand::all();
        return view('admin.pages.brands', compact('brands'));
    }

    public function add_brand_post(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required|min:3',
                'photo' => 'nullable|image|max:2048|mimes:jpg,jpeg,png,webp,gif',
            ]
        );

        $brand = new Brand;
        $brand->name = $validate['name'];

        if ($request->hasFile('photo')) {
            $path = Storage::disk('public')->put('brands', $request->file('photo'));
            $brand->logo = $path;
        }

        $brand->save();

        return redirect()->back()->with('message', 'Бренд успешно добавлена!');
    }

    public function delete_brand_post($id)
    {
        $brand = Brand::findOrFail($id)->delete();

        return redirect()->back()->with('message', 'Бренд успешно удалено!');
    }

}
