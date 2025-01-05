<?php

namespace App\Http\Controllers;

use App\Models\Change;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    public function changes()
    {
        $changes = Change::orderBy('created_at', 'desc')->paginate(25);

        return view('admin.pages.changes', compact('changes'));
    }
}
