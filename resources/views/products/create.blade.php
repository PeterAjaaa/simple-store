@extends('layouts.app')

@section('content')
    <div class="container">
        <main>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                            id="name" value="{{ old('name') }}">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            rows="3">{{ old('description') }}</textarea>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="retail_price">Retail Price</label>
                        <input class="form-control @error('retail_price') is-invalid @enderror" type="number"
                            name="retail_price" id="retail_price" value="{{ old('retail_price') }}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="wholesale_price">Wholesale Price</label>
                        <input class="form-control @error('wholesale_price') is-invalid @enderror" type="number"
                            name="wholesale_price" id="wholesale_price" value="{{ old('wholesale_price') }}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="min_wholesale_qty">Min Wholesale Qty.</label>
                        <input class="form-control @error('min_wholesale_qty') is-invalid @enderror" type="number"
                            name="min_wholesale_qty" id="min_wholesale_qty" value="{{ old('min_wholesale_qty') }}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="quantity">Quantity</label>
                        <input class="form-control @error('quantity') is-invalid @enderror" type="number" name="quantity"
                            id="quantity" value="{{ old('quantity') }}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="photo">Photo</label>
                        <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo"
                            id="photo" value="{{ old('photo') }}">
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="category_id">Category</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Add</button>
                </div>
            </form>
        </main>
    </div>
@endsection
