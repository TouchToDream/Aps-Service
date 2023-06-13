@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cart</h1>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $cartItem)
                <tr>
                    <td>{{ $cartItem->product->name }}</td>
                    <td>
                        <form action="{{ route('cart.update', $cartItem->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="number" name="quantity" value="{{ $cartItem->quantity }}" min="1" max="{{ $cartItem->product->quantity }}">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>{{ $cartItem->product->selling_price }}</td>
                    <td>{{ $cartItem->quantity * $cartItem->product->selling_price }}</td>
                    <td>
                        <form action="{{ route('cart.destroy', $cartItem->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <h3>Total: {{ $totalPrice }}</h3>
    </div>
    </div>
@endsection
