<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginpost(Request $request)
    {
        $verificationCode = $request->verification_code;
        $sessionVerificationCode = Session::get('verification_code');
        if ($verificationCode == $sessionVerificationCode) {
            Session::forget('verification_code');
            $phone = $request->phone;
            $user = User::where('phone', $phone)->first();
            if ($user) {
                $remember = $request->has('remember');
                Auth::login($user, $remember);
                return redirect()->route('dash')->with('success', 'Добро пожаловать!');
            } else {
                return back()->with('info', 'Пользователь с таким номером телефона не найден.');
            }
        } else {
            return back()->with(['info' => 'Неверный код подтверждения.']);
        }
    }

    public function smssend(Request $request)
    {
        $code = Session::get('verification_code');
        $phone = $request->phone;
        $message = "Код подтверждения: $code";

        $smsController = new SmsController();
        $smsResponse = $smsController->sendSms($phone, $message);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
