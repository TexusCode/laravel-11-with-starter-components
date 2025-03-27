<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;

use App\Models\Tranization;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function history()
    {
        $history = Tranization::orderBy('created_at', 'desc')->get();

        return view('azs.pages.history', compact('history'));
    }
}
