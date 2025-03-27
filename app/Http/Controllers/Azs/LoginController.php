<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        $verificationCode = rand(1000, 9999);
        Session::put('verification_code', $verificationCode);
        return view('admin.login');
    }
}
