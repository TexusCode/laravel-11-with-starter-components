<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EmpliyoneController extends Controller
{
    public function empliyones($id = null)
    {
        $empliyones = User::all();
        $empliyone = User::find($id);
        return view('admin.pages.empliyones', compact('empliyones', 'empliyone'));
    }
    public function add_empliyone(Request $request, $id = null)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric|digits:9',
            'role' => 'required|string',
            'password' => 'nullable|string|min:6',
            'avatar' => 'nullable|image|mimes:png,jpg|max:2048',
        ]);

        if ($id) {
            $empliyone = User::find($id);
        } else {
            $empliyone = new User();
            $empliyone->password = Hash::make($validate['password'] ?? '123456');
        }
        $empliyone->name = $validate['name'];
        $empliyone->phone = $validate['phone'];
        $empliyone->role =  $validate['role'];
        if ($request->hasfile('avatar')) {
            $path = Storage::disk('public')->put('avatars', $request->file('avatar'));
            $empliyone->avatar = $path;
        }
        $empliyone->save();
        return redirect()->back()->with('message', 'Сотрудник успешно добавлено или изменено!');
    }
    public function delete_empliyone($id)
    {
        $empliyone = User::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Сотрудник успешно удалено!');
    }
    public function status_empliyone($id)
    {
        $empliyone = User::find($id);
        if ($empliyone) {
            if ($empliyone->status == 1) {
                $empliyone->status = 0;
            } else {
                $empliyone->status = 1;
            }
            $empliyone->save();
            return redirect()->back()->with('message', 'Статус сотрудник успешно обновлено!');
        }
        return redirect()->back()->with('message', 'Сотрудник не найдено!');
    }
}
