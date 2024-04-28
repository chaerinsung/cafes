@extends('layouts/layout')

@section('title', 'Add Cafe')

@section('style')
	h1 {
		font-family: "oliver", sans-serif;
		text-align: center;
	}

	.back {
		color: black;
		padding: 1em;
		text-decoration: underline;
		font-family: "oliver", sans-serif;
	}

	.add {
		width: 70%;
		margin: 0 auto;
	}

	.submit {
		background-color: #ccde9b;
		border-color: #ccde9b;
	}

    .submit:hover {
        background-color: #ccde9b;
		border-color: black;
    }

	.reset {
		background-color: #f9e68c;
		border-color: #f9e68c;
	}

    .reset:hover {
        background-color: #f9e68c;
		border-color: black;
    }
@endsection

@section('main')
    <div class="container">
        <a href="{{ route('cafes.index') }}" class="back">go back to cafe database</a>
		<div class="row">
			<h1 class="col-12 mt-4 mb-4">Add a Cafe</h1>
		</div> <!-- .row -->
	</div> <!-- .container -->

	<div class="container">

		<form action="{{ route('cafes.store') }}" method="POST">
            @csrf

			<div class="form-group mb-3 add">
				<label for="name" class="form-label">cafe:</label>
				<input type="text" class="form-control" id="name" name="name">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
			</div> <!-- .form-group -->

            <div class="form-group mb-3 add">
				<label for="location" class="form-label">location:</label>
				<input type="text" class="form-control" id="location" name="location">
                @error('location')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
			</div> <!-- .form-group -->

			<div class="form-group mb-3 add">
				<label for="opening_hours" class="form-label">opening time:</label>
				<input type="text" class="form-control" id="opening_hours" name="opening_hours" placeholder="00:00 AM/PM format">
                @error('opening_hours')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
			</div> <!-- .form-group -->

			<div class="form-group mb-3 add">
				<label for="closing_hours" class="form-label">closing time:</label>
				<input type="text" class="form-control" id="closing_hours" name="closing_hours" placeholder="00:00 AM/PM format">
                @error('closing_hours')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
			</div> <!-- .form-group -->

            <div class="form-group mb-3 add">
				<label for="parking" class="form-label">parking:</label>
				<input type="text" class="form-control" id="parking" name="parking">
                @error('parking')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
			</div> <!-- .form-group -->

			<div class="form-group mb-3 add">
					<button type="submit" class="btn btn-primary submit">Submit</button>
					<button type="reset" class="btn btn-light reset">Reset</button>
			</div> <!-- .form-group -->

		</form>
    </div>
@endsection