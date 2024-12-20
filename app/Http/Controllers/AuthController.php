<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $validatedData = $request->validate([
            'phone' => 'required|numeric|digits_between:9,12',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('phone', $validatedData['phone'])->first();

        if (!$user) {
            return back()->with('message', 'Пользователь с таким номером телефона не найден.');
        }

        if (!Hash::check($validatedData['password'], $user->password)) {
            return back()->with('message', 'Неверный пароль.');
        }

        Auth::login($user, $remember=true);

        return redirect()->route('dashboard')->with('success', 'Добро пожаловать, администратор!');
    }


    public function registerpost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|unique:users,phone|min:9',
            'password' => 'required|string|min:6',
        ]);
        $phone = User::where('phone', $request->phone)->first();

        if($phone){
            return back()->with('message', 'Этот номер телефон уже зарегистрирован. Войдите в систему.');
        }else{
            $user = new User();
            $user->name = $validatedData['name'];
            $user->phone = $validatedData['phone'];
            $user->password = Hash::make($validatedData['password']);
            $user->save();
            return back()->with('message', 'Заявка успешно отправлена администратору. Ждите ответа.');
        }
        return back()->with('message', 'Не удалось зарегистрироваться. Попробуйте ещё раз.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
