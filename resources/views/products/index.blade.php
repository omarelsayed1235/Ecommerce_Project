@extends('layouts.master')
@section('showproduct')
<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Rating</th>
                <th scope="col">Category</th>
                <th scope="col">Photo</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->rating }}</td>
                    <td>{{ $product->category->type }}</td>
                    <td><img src="{{ $product->getFirstMediaUrl() }}" alt="" class="img-fluid" height="75" width="75"></td>
                    <td>
                        <div class="row">
                            @can('admin')
                            <form action="{{ route('product.edit', $product->id) }}" class="col-2">
                                <button type="submit" class="border-0 btn btn-success"><i class="fa-solid fa-pen"></i> Edit</button>
                            </form>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="col-2">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="border-0 btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                            @endcan
                            @canany(['admin', 'moderator',])
                            <form action="{{ route('product.show', $product->id) }}" class="col-2 ms-3">
                                <button type="submit" class="border-0 btn btn-dark"><i class="fa-solid fa-eye"></i> Show</button>
                            </form>
                            @endcanany
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @canany(['admin', 'moderator',])
    <form action="{{ route('product.create') }}">
    <button type="submit" class="border-0 btn btn-warning mx-2"><i class="fa-solid fa-plus"></i> Add Product</button></form>
    @endcanany
</div>
@endsection
