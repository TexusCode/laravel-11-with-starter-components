<?php

namespace App\Http\Controllers\Revisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function revisor_dash()
    {
        return view('admin.revisor.dashboard');
    }
}
