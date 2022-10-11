@extends('layouts.master')
@section('productdetails')
<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category</th>
                <th scope="col">Photo</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->category->type }}</td>
                    <td><img src="{{ $product->getFirstMediaUrl() }}" alt="" class="img-fluid" height="75" width="75"></td>
                </tr>
        </tbody>
    </table>
    <div class="card-footer mx-2">
        <form action="{{ route('product.index') }}">
            <button type="submit" class="border-0 btn btn-dark mx-2"><i class="fa-solid fa-arrow-left-long"></i> Return</button>
        </form>
    </div>
</div>
@endsection
