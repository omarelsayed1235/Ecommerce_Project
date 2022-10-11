@extends('layouts.main')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">gender</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>{{ Auth::user()->name }}</td>
        <td>{{ Auth::user()->email }}</td>
        <td>{{ Auth::user()->type }}</td>
      </tr>
    </tbody>
  </table>
  <div class="row">
    <div class="">
        @canany(['admin', 'moderator'])
        <form action="{{ route('product.create') }}">
            <a href="{{ route('user.index') }}" class="btn btn-warning border-0">Dashboard</a>
        </form>
        @endcanany
        <div class="">
            <a href="{{ route('test')}}" class="btn btn-dark border-0"><i class="fa-solid fa-arrow-left-long"></i> Return</a>
        </div>
    </div>
    <div class="">
        <a class="btn btn-danger border-0" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </div>
 </div>
  @endsection
