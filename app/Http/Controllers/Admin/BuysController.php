<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuysController extends Controller
{
    public function buys_get()
    {
        return view('admin.pages.buys');
    }
}
