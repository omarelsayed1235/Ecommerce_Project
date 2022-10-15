@extends('layouts.master')
@section('createproduct')
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mx-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3 mx-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" name="price">
    </div>
    <div class="mb-3 mx-3">
      <label for="quantity" class="form-label">Quantity</label>
      <input type="number" class="form-control" name="quantity">
    </div>
    <div class="mb-3 mx-3">
      <label for="rating" class="form-label">Rating</label>
      <input type="number" class="form-control" name="rating" min="1" max="5">
    </div>
    <div class="mb-3 mx-3">
        <label for="category">category</label>
        <select name="category_id" class="form-control" required>
            @foreach ($categories as $category )
            <option value="{{ $category->id }}"> {{ $category->type }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 mx-3">
        <label class="me-2 pt-1" for="type">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <button type="submit" class="btn btn-primary mx-3">Submit</button>
  </form>
@endsection
