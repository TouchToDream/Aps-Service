@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Login</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
@endsection