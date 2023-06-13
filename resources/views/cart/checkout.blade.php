@extends('layouts.app')

@section('content')
    <h1>Checkout</h1>
    <form action="{{ route('cart.checkout') }}" method="post">
        @csrf
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
        <br>
        <label for="contact">Contact:</label>
        <input type="text" name="contact" id="contact">
        <br>
        <button type="submit">Place Order</button>
    </form>
@endsection
