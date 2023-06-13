<?php

namespace App\Http\Controllers\Auth;

use App\Models\Cart;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $cart = Cart::create([
            'user_id' => $user->id,
        ]);
    
        return redirect()->route('home')->with('success', __('auth.registration_success'));
    }
}