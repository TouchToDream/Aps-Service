@extends('layouts.app')

@section('content')
<div class="container">
    <tbody>
        @if ($userData)
        <h1>Welcome, {{ $userData->name }}</h1>
        <p>Email: {{ $userData->email }}</p>
        <p>Phone: {{ $userData->phone }}</p>
        <a href="{{ route('user.edit', $userData->id) }}" class="btn btn-primary">Редактировать</a>
        <form action="{{ route('user.destroy', $userData->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Вы уверены, что хотите удалить профиль?')" class="btn btn-danger" >Удалить</button>
        </form>
        @else
        <p>User data not found.</p>
        @endif
    </tbody>
</div>

@endsection