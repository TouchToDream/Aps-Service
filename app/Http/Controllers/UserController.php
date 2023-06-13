<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserUpdatePasswordRequest;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userData = User::where('id', $user->id)->first();

        return view('users.index', compact('userData'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit()
    {
        $user = Auth::user();

        return view('users.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request,User $user)
    {
        $validatedData = $request->validated();

        $user->update([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function changePassword(UserUpdatePasswordRequest $request, User $user)
{
    $validatedData = $request->validated();

    if (!Hash::check($validatedData['current_password'], $user->password)) {
        return redirect()->back()->withErrors(['current_password' => 'Incorrect current password.']);
    }

    $user->update([
        'password' => Hash::make($validatedData['password']),
    ]);

    return redirect()->route('users.index')->with('success', 'Password changed successfully.');
}

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
