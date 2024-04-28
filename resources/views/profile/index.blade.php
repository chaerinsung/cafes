@extends('layouts/layout')

@section('title', 'Profile')

@section('style')
    h1 {
        font-size: 4em;
        font-weight: bold;
    }
    .hello {
        font-size: 4em;
        font-weight: bold;
        margin-bottom: -2%;
    }
    h2 {
        font-size: 3em;
    }
@endsection

@section('main')
    <h1 class="hello">hello.</h1>
    <h1>{{ $user->name }}.</h1>

    <hr>
    <h5>email: {{ $user->email }}</h5>
    <hr>

    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <h2>favorite<br> cafes.</h2>
            </div>
            <div class="col">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if ($favorites->isEmpty())
                <p>No cafes have been added to favorites yet.</p>
            @else
                @foreach($favorites as $favorite)
                    <p>{{ $favorite->name }} - {{ $favorite->pivot->created_at->format('M d, Y h:i A') }}</p>
                @endforeach
            @endif
            </div>
        </div>
    </div>

@endsection