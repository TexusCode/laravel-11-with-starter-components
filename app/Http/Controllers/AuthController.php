<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }

    public function loginpost(Request $request)
    {
        // $validate = $request->validate([
        //     'phone' => 'required|numeric|min:9|max:9',
        //     'password' => 'required|string|min:6',
        // ]);

        return redirect()->back()->with('message', "Не удалось войти. Проверьте номер телефона и пароль и попробуйте снова. " . $request->phone);

    }

    public function registerpost(Request $request)
    {
        $phone = User::where('phone', $request->phone)->first();

        if($phone){
            return back()->with('message', 'Этот номер телефон уже зарегистрирован. Войдите в систему.');
        }else{
            $user = new User();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->phone);
            $user->save();
            return back()->with('message', 'Заявка успешно отправлена администратору. Ждите ответа.');
        }
        return back()->with('message', 'Не удалось зарегистрироваться. Попробуйте ещё раз.');
    }
}
