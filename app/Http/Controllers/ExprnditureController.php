<?php

namespace App\Http\Controllers;

use App\Models\Exprnditure;
use Illuminate\Http\Request;

class ExprnditureController extends Controller
{
    public function expenditures()
    {
        $expenditures = Exprnditure::paginate(25);
        return view('admin.pages.expendituries', compact('expenditures'));
    }
    public function add_expenditure(Request $request)
    {
        $validate = $request->validate([
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);
        $expenditure = new Exprnditure();
        $expenditure->price = $validate['price'];
        $expenditure->description = $validate['description'];
        $expenditure->save();

        return redirect()->back()->with('message', 'Расход успешно добавлено!');
    }
    public function delete_expenditure($id)
    {
        $expenditure = Exprnditure::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Расход успешно удалено!');
    }
}
