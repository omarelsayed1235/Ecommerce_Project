@extends('layouts.master')
@section('createcategory')
<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class="mb-3 mx-3">
        <label class="me-2 pt-1" for="type">Type</label>
        <input class="me-2 ms-2" type="radio" name="type" value="men">Men
        <input class="me-2 ms-2" type="radio" name="type" value="women">Women
        <input class="me-2 ms-2" type="radio" name="type" value="kids">Kids
    </div>
    <button type="submit" class="btn btn-primary mx-3">Submit</button>
  </form>
@endsection
