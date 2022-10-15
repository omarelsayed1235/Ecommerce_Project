@extends('layouts.main')
@section('content')
@if ($order!=null)
<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">price</th>
                <th scope="col">Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->products as $product )
            <tr>
                <td>{{ $product->name }}</td>
                @foreach ($order_product as $leo )
                @if ($leo->order_id == $order->id &&$leo->product_id==$product->id )
                <td>{{ $leo->quantity }}</td>
                    @break
                @endif
                @endforeach
                <td>{{ $product->price }}</td>
                <td><img src="{{ $product->getFirstMediaUrl() }}" alt="" class="img-fluid" height="75" width="75"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3 class="offset-2">Total=${{ $order->total }}</h3>
    <div class="card-footer mx-2">
        <form action="{{ route('checkout') }}">
            <input type="number" name="id" hidden value="{{ $order->id }}">
            <button type="submit" class="border-0 btn btn-dark mx-2">Proceed To Checkout</button>
        </form>
    </div>
</div>
@else
<h1 class="text-center">Empty Cart</h1>
@endif
@endsection
