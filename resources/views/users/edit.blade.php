@extends('layouts.app')

@section('content')
<form action="{{ route('user.update', $user) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}">
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" disabled>
    </div>

    <div>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" pattern="^(\+380\d{9})?$" title="Формат: +380XXXXXXXXX.">
        @error('phone')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit">Save</button>
    </div>
   
</form>

<form action="{{ route('user.changePassword', $user) }}" method="POST">
    @csrf

    <div>
        <label for="password">New Password:</label>
        <input type="password" id="password" name="password">
        @error('password')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation">
    </div>

    <div>
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required>
        @error('current_password')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit">Change Password</button>
    </div>
</form>

@endsection
