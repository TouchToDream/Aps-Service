<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:3'],
        ]);
    
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'Почтовый ящик уже используется']);
        }
    
        if ($request->password !== $request->password_confirmation) {
            return redirect()->back()->withErrors(['password' => 'Пароли не совпадают']);
        }
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        // Ваши дополнительные действия после успешной регистрации
    
        return redirect()->route('home')->with('success', 'Регистрация прошла успешно!');
    }
}