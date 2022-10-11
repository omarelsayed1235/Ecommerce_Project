@extends('layouts.master')
@section('showcategory')
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->type }}</td>
                        <td>
                            <div class="row">
                                @can('admin')
                                <form action="{{ route('category.edit', $category->id) }}" class="col-2">
                                    <button type="submit" class="border-0 btn btn-success"><i class="fa-solid fa-pen"></i> Edit</button>
                                </form>
                                <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="col-2">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="border-0 btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                                </form>
                                @endcan
                                @canany(['admin', 'moderator'])
                                <form action="{{ route('category.show', $category->id) }}" class="col-2">
                                    <button type="submit" class="border-0 btn btn-dark"><i class="fa-solid fa-eye"></i> Show</button>
                                </form>
                                @endcanany
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @canany(['admin', 'moderator'])
        <form action="{{ route('category.create') }}">
        <button type="submit" class="border-0 btn btn-warning mx-2"><i class="fa-solid fa-plus"></i> Add Category</button></form>
        @endcanany
    </div>
@endsection
