@extends('layouts/layout')

@section('title', 'Login')

@section('style')
    h1 {
        font-family: "oliver", sans-serif;
        font-size: 4em;
        text-align: center;
        margin-top: 1.5em;
    }

    .blue {
        background-color: white;
        color: black;
        border-color: white;
        text-decoration: underline;
    }

    .blue:hover {
        background-color: #d1e6f5;
        color: black;
        border-color: #d1e6f5;
    }

    form {
        border: 1px solid black; 
        border-radius: 30px; 
        padding: 30px;
        width: 60%;
        margin: 0 auto;
        margin-top: 4em;
    }

    .mb-3 {
        padding-bottom: 2em;
    }

@endsection

@section('main')
    <h1>Login</h1>

    <form method="post" action="{{ route('auth.login') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <input type="submit" value="Login" class="btn btn-primary blue">
    </form>
@endsection