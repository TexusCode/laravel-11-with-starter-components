<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function suppliers(Request $request)
    {
        $suppliers = Supplier::all();
        return view('admin.pages.supplies', compact('suppliers'));
    }
    public function add_supplier_post(Request $request)
    {
        $validate = $request->validate([
            'company_name' => 'required|string',
            'logo' => 'nullable|image|mimes:png,jpg,webm,gif|max:248',
            'phone' => 'required|numeric|digits:9',
            'location' => 'nullable|string',
        ]);

        Supplier::create([
            'company_name' => $validate['company_name'],
            'phone' => $validate['phone'],
            'location' => $validate['location'],
        ]);
        return back()->with('message', 'Поставщик усппешно добавлено!');
    }
    public function delete_supplier_post($id)
    {
        $category = Supplier::findOrFail($id)->delete();

        return redirect()->back()->with('message', 'Поставщик успешно удалено!');
    }
}
