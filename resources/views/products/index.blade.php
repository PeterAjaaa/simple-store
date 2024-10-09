@extends('layouts.app')

@section('content')
    <div class="container">
        <main>
            <a class="btn btn-primary" href="{{ route('products.create') }}">Add New</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Photo</th>
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
                                <img src="{{ Storage::url($product->photo) }}" class="img-thumbnail w-50">
                            </td>
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
                                <div class="btn-group" role="group">
                                    <a class="btn btn-warning" href="{{ route('products.edit', $product) }}">
                                        Edit
                                    </a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
@endsection
