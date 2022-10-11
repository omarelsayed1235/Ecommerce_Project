@extends('layouts.master')
@section('userdetails')
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->type }}</td>
                    </tr>
            </tbody>
        </table>
        <div class="card-footer mx-2">
            <form action="{{ route('user.index') }}">
                <button type="submit" class="border-0 btn btn-dark mx-2"><i class="fa-solid fa-arrow-left-long"></i> Return</button>
            </form>
        </div>
    </div>
@endsection
