@extends('layouts/layout')

@section('title', "Edit $cafe->name")

@section('style')
    .cafe {
        text-align: right;
    }

    h1 {
        font-weight: bolder;
        font-size: 3em;
    }

    .submit {
        border-color: white;
        background-color: white;
        color: black;
        text-decoration: underline;
    }

    .submit:hover {
        background-color: #d1e6f5;
        color: black;
        border-color: #d1e6f5;
    }
@endsection

@section('main')
    <hr>
    <h1>EDIT CAFE</h1> 
    <hr>
    <h1 class="cafe text-uppercase">{{$cafe->name}}</h1>
    <hr>

    <div class="container">
        <form action="{{ route('cafes.update', [ 'id' => $cafe->id ]) }}" method="POST">
            @csrf 
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Cafe</label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $cafe->name) }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="location" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-10">
                    <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $cafe->location) }}">
                    @error ('location')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>  
            </div>
            <div class="mb-3 row">
                <label for="opening_hours" class="col-sm-2 col-form-label">Opening Time</label>
                <div class="col-sm-10">
                    <input type="text" name="opening_hours" id="opening_hours" class="form-control" value="{{ old('opening_hours', $cafe->opening_hours) }}">
                    @error ('opening_hours')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            </div>
            <div class="mb-3 row">
                <label for="closing_hours" class="col-sm-2 col-form-label">Closing Time</label>
                <div class="col-sm-10">
                    <input type="text" name="closing_hours" id="closing_hours" class="form-control" value="{{ old('closing_hours', $cafe->closing_hours) }}">
                    @error ('closing_hours')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            </div>
            <div class="mb-3 row">
                <label for="parking" class="col-sm-2 col-form-label">Parking</label>
                <div class="col-sm-10">
                    <input type="text" name="parking" id="parking" class="form-control" value="{{ old('parking', $cafe->parking) }}">
                    @error ('parking')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary submit">
                    Save
                </button>
            </div>
        </form> 
    </div>
@endsection