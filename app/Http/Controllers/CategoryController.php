<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::all();


        return view('admin.pages.categories', compact('categories'));
    }

    public function add_category_post(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required|min:3',
                'photo' => 'nullable|image|max:2048|mimes:jpg,jpeg,png,webp,gif',
            ]
        );

        $category = new Category;
        $category->name = $validate['name'];

        if ($request->hasFile('photo')) {
            $path = Storage::disk('public')->put('categories', $request->file('photo'));
            $category->photo = $path;
        }

        $category->save();

        return redirect()->back()->with('message', 'Категория успешно добавлена!');
    }


    public function delete_category_post($id)
    {
        $category = Category::findOrFail($id)->delete();

        return redirect()->back()->with('message', 'Категория успешно удалено!');
    }
}
