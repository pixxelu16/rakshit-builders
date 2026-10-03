@extends('layouts.app')

@section('content')
    <h1>Login</h1>
    @if($errors->any())
        <p>{{ $errors->first()}}</p>
    @endif

    <form method="POST" action="/login">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
@endsection