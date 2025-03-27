<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('azs.pages.home');
    }
}
