@extends('layouts.master')
@section('createuser')
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="mb-3 mx-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3 mx-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3 mx-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-3 mx-3">
        <label class="me-2 pt-1" for="type">Type</label>
        <input class="me-2 ms-2" type="radio" name="type" value="user">User
        <input class="me-2 ms-2" type="radio" name="type" value="moderator">Moderator
        <input class="me-2 ms-2" type="radio" name="type" value="admin">Admin
    </div>
    <button type="submit" class="btn btn-primary mx-3">Submit</button>
  </form>
@endsection
