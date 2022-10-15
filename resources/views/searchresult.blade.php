@extends('layouts.main')
@section('content')
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="{{ $product->getFirstMediaUrl() }}" alt="" class="img-fluid" height="75"
                        width="75"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->type }}</td>
                <td>
                    <div class="col-lg-3">
                        <form action="{{ route('product.cart') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                        data-type="minus" data-field="">
                                        <span ><i class="fa-solid fa-minus"></i></span>
                                    </button>
                                </span>
                                <input type="text" id="quantity" name="quantity" class="form-control input-number w-50 text-center"
                                    value="1" min="1" max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                        data-type="plus" data-field="">
                                        <span ><i class="fa-solid fa-plus"></i></span>
                                    </button>
                                </span>
                            </div>
                            <button class="btn btn-dark ms-4 mt-3" type="submit">Add to Cart</button>
                            <input type="number" hidden name="user_id" value="{{ Auth::user()->id }}">
                            <input type="number" hidden name="product_id" value="{{ $product->id }}">
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="">
        <a href="{{ route('test')}}" class="btn btn-dark border-0"><i class="fa-solid fa-arrow-left-long"></i> Return</a>
    </div>
@endsection
