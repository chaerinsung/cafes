@extends('layouts/layout')

@section('title', 'Cafe Database')

@section('style')
    #cafes h1 {
        font-family: "oliver", sans-serif;
        text-align: center;
        /*padding-bottom: 1em;*/
    }

    #cafes h4 {
        font-family: "oliver", sans-serif;
        text-align: center;
    }

    .study {
        font-family: sans-serif;
    }

    .chill {
        font-family: sans-serif;
    }

    .drawings {
        width: 100%;
        padding-top: 4.5em;
        align-content: center;
    }
    
    .justify-content-between {
            margin: -0.5em;
    }
    
    .database {
        width: 100%;
        margin: 0 auto;
    }

    #database h4 {
        text-decoration: underline;
    }

    #database a {
        color: black;
    }

    .d-flex.justify-content-between > div {
        margin: 0 2.5rem; /* Adjust this value as needed */
    }
    
@endsection

@section('main')
    <div id="cafes">
		<h1>my cafe recs</h1>
		<hr>

		<div class="container text-center">
		  <div class="row">
		    <div class="col">
		      <h4 class="pink">late night cafe</h4>
		      <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>tpo coffee</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>1</p>
				</div>
			  </div>
			  <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>spot coffee & more</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>2</p>
				</div>
			  </div>
			  <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>about time</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>3</p>
				</div>
			  </div>
			  <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>cafe mak</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>4</p>
				</div>
			  </div>
              <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>awesome coffee</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>5</p>
				</div>
			  </div>
		    </div>
		    <div class="col">
		      <h4 class="yellow">coffee & drinks</h4>
		      <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>damo</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>1</p>
				</div>
			  </div>
			  <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>stereoscope coffee</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>2</p>
				</div>
			  </div>
			  <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>loquat coffee</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>3</p>
				</div>
			  </div>
			  <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>alchemist coffee</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>4</p>
				</div>
			  </div>
              <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>community goods</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>5</p>
				</div>
			  </div>
		    </div>
		    <div class="col">
		      <h4 class="blue">aesthetic</h4>
		      <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>haru cake</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>1</p>
				</div>
			  </div>
			  <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>damo</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>2</p>
				</div>
			  </div>
			  <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>memorylook</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>3</p>
				</div>
			  </div>
			  <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>stereoscope - hollywood</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>4</p>
				</div>
			  </div>
              <div class="d-flex justify-content-between">
				<div class="mr-auto p-3">
					<p>community goods</p>
				</div>
				<!-- <div class="p-3">
					<p>. . . . . . . . . .</p>
				</div> -->
				<div class="p-3">
					<p>5</p>
				</div>
			  </div>
		    </div>
		  </div>
		</div>

		<div class="container text-enter">
			<div class="row">
				<div class="col study">
					<h4 class="blue">studying</h4>
					<div class="d-flex justify-content-between">
						<div class="mr-auto p-3">
							<p>somemore la</p>
						</div>
						<!-- <div class="p-3">
							<p>. . . . . . . . . .</p>
						</div> -->
						<div class="p-3">
							<p>1</p>
						</div>
					</div>
					<div class="d-flex justify-content-between">
						<div class="mr-auto p-3">
							<p>rny coffee studio</p>
						</div>
						<!-- <div class="p-3">
							<p>. . . . . . . . . .</p>
						</div> -->
						<div class="p-3">
							<p>2</p>
						</div>
					</div>
					<div class="d-flex justify-content-between">
						<div class="mr-auto p-3">
							<p>alchemist coffee - koreatown</p>
						</div>
						<!-- <div class="p-3">
							<p>. . . . . . . . . .</p>
						</div> -->
						<div class="p-3">
							<p>3</p>
						</div>
					</div>
					<div class="d-flex justify-content-between">
						<div class="mr-auto p-3">
							<p>the history coffee</p>
						</div>
						<!-- <div class="p-3">
							<p>. . . . . . . . . .</p>
						</div> -->
						<div class="p-3">
							<p>4</p>
						</div>
					</div>
					<div class="d-flex justify-content-between">
						<div class="mr-auto p-3">
							<p>cafe mak</p>
						</div>
						<!-- <div class="p-3">
							<p>. . . . . . . . . .</p>
						</div> -->
						<div class="p-3">
							<p>5</p>
						</div>
					</div>
				</div>
				<div class="col">
					<img src="{{ asset('../img/drawings.jpg') }}" alt="Drawings" class="drawings img-responsive">
				</div>
				<div class="col chill">
					<h4 class="green">chilling</h4>
					<div class="d-flex justify-content-between">
						<div class="mr-auto p-3">
							<p>about time</p>
						</div>
						<!-- <div class="p-3">
							<p>. . . . . . . . . .</p>
						</div> -->
						<div class="p-3">
							<p>1</p>
						</div>
					</div>
					<div class="d-flex justify-content-between">
						<div class="mr-auto p-3">
							<p>damo</p>
						</div>
						<!-- <div class="p-3">
							<p>. . . . . . . . . .</p>
						</div> -->
						<div class="p-3">
							<p>2</p>
						</div>
					</div>
					<div class="d-flex justify-content-between">
						<div class="mr-auto p-3">
							<p>memorylook</p>
						</div>
						<!-- <div class="p-3">
							<p>. . . . . . . . . .</p>
						</div> -->
						<div class="p-3">
							<p>3</p>
						</div>
					</div>
					<div class="d-flex justify-content-between">
						<div class="mr-auto p-3">
							<p>somemore la</p>
						</div>
						<!-- <div class="p-3">
							<p>. . . . . . . . . .</p>
						</div> -->
						<div class="p-3">
							<p>4</p>
						</div>
					</div>
					<div class="d-flex justify-content-between">
						<div class="mr-auto p-3">
							<p>tpo coffee</p>
						</div>
						<!-- <div class="p-3">
							<p>. . . . . . . . . .</p>
						</div> -->
						<div class="p-3">
							<p>5</p>
						</div>
					</div>
				</div>
			</div>
		</div>

        <hr>

        <div id="database" class="container text-center">
            <h1>cafe database</h1>
            <h4><a href="{{ route('cafes.create') }}">click here to add a cafe to the database</a></h4>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-hover database">
            <thead>
                <tr>
                <th scope="col">cafe</th>
                <th scope="col">location</th>
                <th scope="col">opening time</th>
                <th scope="col">closing time</th>
                <th scope="col">parking</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cafes as $cafe)
                    <tr>
                    <td scope="col" class="align-middle"><a href="{{ route('cafes.show', $cafe) }}">{{ $cafe->name }}</a></td>
                    <td scope="col" class="align-middle">{{ $cafe->location }}</td>
                    <td scope="col" class="align-middle">{{ $cafe->opening_hours }}</td>
                    <td scope="col" class="align-middle">{{ $cafe->closing_hours }}</td>
                    <td scope="col" class="align-middle">{{ $cafe->parking }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
@endsection