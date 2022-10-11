@extends('layouts.master')
@section('categorydetails')
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->type }}</td>
                    </tr>
            </tbody>
        </table>
        <div class="card-footer mx-2">
            <form action="{{ route('category.index') }}">
                <button type="submit" class="border-0 btn btn-dark mx-2"><i class="fa-solid fa-arrow-left-long"></i> Return</button>
            </form>
        </div>
    </div>
@endsection
