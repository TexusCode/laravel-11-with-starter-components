<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;
use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function expenses()
    {
        $expenses = Expenses::orderBy('created_at', 'desc')->get();
        return view('azs.pages.expenses', compact('expenses'));
    }

    public function expensespost(Request $request)
    {
        $expense = new Expenses();
        $expense->price = $request->price;
        $expense->description = $request->description;
        $expense->save();

        return back()->with('info', 'Успешно добавлено!');
    }
}
