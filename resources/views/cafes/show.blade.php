@extends('layouts/layout')

@section('title', $cafe->name)

@section('style')
    h1 {
        font-size: 5em;
    }

    .buttons {
        text-align: right;
    }

    .buttons button {
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

    .pink:hover {
        background-color: #f5dada;
        color: black;
        border-color: #f5dada;
    }

    .submit {
        background-color: white;
        color: black;
        border-color: white;
        text-decoration: underline;
    }
@endsection

@section('main')
    <div class="container">
        <h1 class="text-uppercase">{{ $cafe->name }}</h1>
        <hr>

        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td>Location</td>
                    <td>{{ $cafe->location }}</td>
                </tr>
                <tr>
                    <td>Opening Hours</td>
                    <td>{{ $cafe->opening_hours }}</td>
                </tr>
                <tr>
                    <td>Closing Hours</td>
                    <td>{{ $cafe->closing_hours }}</td>
                </tr>
                <tr>
                    <td>Parking</td>
                    <td>{{ $cafe->parking }}</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <!-- <p>Location: {{ $cafe->location }}</p>
        <p>Opening Hours: {{ $cafe->opening_hours }}</p>
        <p>Closing Hours: {{ $cafe->closing_hours }}</p>
        <p>Parking: {{ $cafe->parking }}</p> -->

        <div class="buttons">
            <form action="{{ route('profile.toggleFavorites', ['id' => $cafe->id]) }}" method="POST">
                @csrf
                @if ($user->favorites()->where('cafe_id', $cafe->id)->exists())
                    <button type="submit" class="btn btn-danger pink">Remove from Favorites</button>
                @else
                    <button type="submit" class="btn btn-primary blue">Add to Favorites</button>
                @endif
            </form>

            @if ($cafe->user_id === Auth::id())
                <form action="{{ route('cafes.edit', [ 'id' => $cafe->id ]) }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-primary blue">Edit Cafe Details</button>
                </form>


                <form action="{{ route('cafes.delete', [ 'id' => $cafe->id ]) }}" method="POST">
                    @csrf 
                    @method('DELETE')

                    <button type="submit" class="btn btn-primary pink">Delete Cafe</button>
                </form>
            @endif
    
        </div>
    
        <!-- Add Comment Form -->
        <form method="POST" action="{{ route('comments.store', $cafe->id) }}#commentsSection">
            @csrf
            <div class="form-group">
                <label for="body">ADD COMMENT</label>
                <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary submit blue">Submit Comment</button>
        </form>
            
        <hr>
            
        <!-- Comments Section -->
        <h2 id="commentsSection" class="text-uppercase">Comments</h2>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if ($cafe->comments->count() > 0)
            @foreach ($cafe->comments()->orderBy('created_at', 'desc')->get() as $comment)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comment->user->name }}</h5>
                        <p class="card-text">{{ $comment->body }}</p>
                        <p class="card-text"><small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small></p>
                        @if (Auth::check() && Auth::user()->id === $comment->user_id)
                            <!-- Allow edit and delete for the authenticated user's own comments -->
                            <a href="{{ route('comments.edit', ['id' => $comment->id]) }}" class="btn btn-primary submit blue">Edit</a>
                            <form action="{{ route('comments.destroy', ['id' => $comment->id]) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger submit pink">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <p>No comments yet.</p>
        @endif
    </div>
@endsection