<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function units()
    {
        $units = Unit::all();
        return view('admin.pages.units', compact('units'));
    }
    public function add_unit_post(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required|min:2',
            ]
        );

        $unit = new Unit;
        $unit->name = $validate['name'];
        $unit->save();

        return redirect()->back()->with('message', 'Единица измерение успешно добавлена!');
    }
    public function delete_unit_post($id)
    {
        $unit = Unit::findOrFail($id)->delete();

        return redirect()->back()->with('message', 'Единица измерение успешно удалено!');
    }
}
