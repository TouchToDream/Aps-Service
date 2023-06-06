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
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    </div>
@endsection
