@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Products</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Article</th>
                    <th>Quantity</th>
                    <th>Selling Price</th>
                    <th>Add to Crat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->article }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->selling_price }}</td>
                        <td>
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    </div>
@endsection
