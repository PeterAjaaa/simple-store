@extends('layouts.app')

@section('content')
    <div class="container">
        <main>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="retail_price">Retail Price</label>
                        <input class="form-control" type="number" name="retail_price" id="retail_price">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="wholesale_price">Wholesale Price</label>
                        <input class="form-control" type="number" name="wholesale_price" id="wholesale_price">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="min_wholesale_qty">Min Wholesale Qty.</label>
                        <input class="form-control" type="number" name="min_wholesale_qty" id="min_wholesale_qty">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="quantity">Quantity</label>
                        <input class="form-control" type="number" name="quantity" id="quantity">
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Add</button>
                </div>
            </form>
        </main>
    </div>
@endsection
