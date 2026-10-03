@extends('layouts.app')

@section('content')
    <h1>Rakshit Builders</h1>
    <p>Inventory and dispatch dashboard</p>

    @auth 
    <p>Welcome, {{ auth()->user()->name }}</p>
    <form action="/logout" method="post">
        @csrf 
        <button type="submit">Logout</button>
    </form>
    @endauth
@endsection
