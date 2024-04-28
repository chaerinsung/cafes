@extends('layouts/layout')

@section('title', 'Edit Comment')

@section('main')
    <h1>Edit Comment</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('comments.update', ['id' => $comment->id]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="body">Comment</label>
            <textarea class="form-control" id="body" name="body" rows="3">{{ $comment->body }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Comment</button>
    </form>
@endsection
