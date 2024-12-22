<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
                'photo' => 'nullable|file|max:2048',
            ]
        );

        $category = new Category;
        $category->name = $validate['name'];

        if ($request->hasFile('photo')) {
            $filePath = $request->file('photo')->store('categories', 'public');
            $category->photo = $filePath;
        }

        $category->save();

        return redirect()->back()->with('message', 'Категория успешно добавлена!');
    }

    public function add_product_post($id)
    {
        $category = Category::findOrFail($id)->delete();

        return redirect()->back()->with('message', 'Категория успешно удалено!');
    }

}
