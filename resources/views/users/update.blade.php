@extends('layouts.master')
@section('createuser')
<div class="row mx-2">
    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group mx-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group mx-2">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>
            <div class="form-group mx-2">
                <label class="me-2 pt-1" for="type">Type</label>
                <input class="me-2 ms-2" type="radio"name="type" @if ($user->type == 'user') checked @endif
                    value="user">User
                <input class="me-2 ms-2" type="radio"name="type" @if ($user->type == 'moderator') checked @endif
                    value="moderator">Moderator
                <input class="me-2 ms-2" type="radio"name="type" @if ($user->type == 'admin') checked @endif
                    value="admin">Admin
            </div>
        </div>
        <div class="card-footer mx-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
