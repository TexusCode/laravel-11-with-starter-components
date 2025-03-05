<?php

namespace App\Http\Controllers\Revisor;

use App\Http\Controllers\Controller;
use App\Models\Revision;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function revisor_dash()
    {
        return view('admin.revisor.dashboard');
    }
    public function revision()
    {
        $revisions = Revision::orderby('created_at', 'desc')->get();
        return view('admin.pages.revision', compact('revisions'));
    }
    public function revision_post() {}
}
