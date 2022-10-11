@extends('layouts.master')
@section('updateproduct')
<div class="row mx-2">
    <form action="{{ route('product.update',$product->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group mx-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}">
            </div>
            <div class="form-group mx-2">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" value="{{ $product->price }}">
            </div>
            <div class="form-group mx-2">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}">
            </div>
            <div class="form-group mx-2">
                <label for="category">category</label>
                        <select name="category_id" class="form-control" required>
                            @foreach ($categories as $category )
                            <option value="{{ $category->id }}"> {{ $category->type }}</option>
                            @endforeach
                        </select>
            </div>
        </div>
        <div class="card-footer mx-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
