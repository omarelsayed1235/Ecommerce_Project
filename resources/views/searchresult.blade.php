@extends('layouts.main')
@section('content')
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td><img src="{{ $product->getFirstMediaUrl() }}" alt="" class="img-fluid" height="75" width="75"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->category->type }}</td>
            </tr>
    </tbody>
</table>
@endsection
