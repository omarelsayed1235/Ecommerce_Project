@extends('layouts.master')
@section('updatecategory')
<div class="row mx-2">
    <form action="{{ route('category.update',$category->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group mx-2">
                <label class="me-2 pt-1" for="type">Type</label>
                <input class="me-2 ms-2" type="radio" name="type" @if ($category->type == 'men') checked @endif
                    value="men">Men
                <input class="me-2 ms-2" type="radio" name="type" @if ($category->type == 'women') checked @endif
                    value="women">Women
                <input class="me-2 ms-2" type="radio" name="type" @if ($category->type == 'kids') checked @endif
                    value="kids">Kids
            </div>
        </div>
        <div class="card-footer mx-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
