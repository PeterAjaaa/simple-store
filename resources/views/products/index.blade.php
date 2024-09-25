@extends('layouts.app')

@section('content')
    <div class="container">
        <main>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Retail Price</th>
                        <th>Wholesale Price</th>
                        <th>Min. Wholesale Qty.</th>
                        <th>Quantity</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                <a href="{{ route('products.show', $product) }}">
                                    {{ $product->name }}
                                </a>
                            </td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->retail_price }}</td>
                            <td>{{ $product->wholesale_price }}</td>
                            <td>{{ $product->min_wholesale_qty }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product) }}">
                                    Edit
                                </a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
@endsection
