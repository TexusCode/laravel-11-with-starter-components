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
        $user = User::where('phone', '005335051')->first();

        if(!$user)
        {
            $user = new User();
            $user->name = 'Shod';
            $user->phone = '005335051';
            $user->status = 1;
            $user->role = "admin";
            $user->password = Hash::make('Shod63mm');
            $user->save();
        }
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function loginpost(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|numeric|digits:9',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('phone', $validatedData['phone'])->first();

        if (!$user) {
            return back()->withErrors(['phone' => 'Пользователь с таким номером телефона не найден.'])->withInput();
        }

        if (!Hash::check($validatedData['password'], $user->password)) {
            return back()->withErrors(['password' => 'Неверный пароль.'])->withInput();
        }

        Auth::login($user, true);

        return match (Auth::user()->role) {
            'pos' => redirect()->route('pos')->with('success', 'Добро пожаловать, кассир!'),
            'admin' => redirect()->route('dashboard')->with('success', 'Добро пожаловать, администратор!'),
        };
    }



    public function registerpost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|unique:users,phone|min:9',
            'password' => 'required|string|min:6',
        ]);
        $phone = User::where('phone', $request->phone)->first();

        if ($phone) {
            return back()->with('message', 'Этот номер телефон уже зарегистрирован. Войдите в систему.');
        } else {
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
