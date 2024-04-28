@extends('layouts/layout')

@section('title', 'Home')

@section('style')
    #home {
        margin-top: 14%;
    }

    #search {
        margin: 0 auto;
        width: 80%;
    }

    .searchTerm {
        width: 100%;
        border: 3px solid black;
        padding: 5px;
        height: 40px;
        border-radius: 10px 10px 10px 10px;
        outline: none;
        color: #686b69;
    }

    h1 {
        font-family: "luney", sans-serif;
        text-align: center;
        font-size: 100px;
    }

    .search .btn {
        text-decoration: underline;
    }

    .search {
        text-align: center;
    }

    .photo-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .grid-item {
        width: calc(33.33% - 20px); 
        margin: 10px;
        box-sizing: border-box;
    }

    .photo {
        width: 100%; 
        height: 30em;
        border-radius: 2em;
    }
@endsection

@section('main')
    <div id="home">
        <h1>cafes in los angeles</h1>

        <div id="search">
            <input type="text" class="searchTerm" id="searchInput" placeholder="type in 'cafes' and press search...">
            <div class="search">
                <button type="submit" class="btn" onclick="search()">search</button>
            </div>
            <div id="photos"></div>
        </div>
    </div>

    <div id="footer">
		<p>designed and coded by chaerin sung</p>
	</div>

    <script>
		function search() {
			const searchInput = document.getElementById('searchInput').value.toLowerCase();
			console.log('Search input:', searchInput);

			// check if input contains the words "cafes"
			if (searchInput.includes('cafes')) {
				// display cafe photos
				console.log('Displaying cafe photos');
				displayCafePhotos();
			} else {
				// clear previous results if query doesn't match
				 console.log('Clearing results');
				clearResults();
			}
		}

		function displayCafePhotos() {
			const cafePhotos = [
				'../img/haru.png', 
				'../img/memorylook.png',
				'../img/haru2.png',
				'../img/somemore.png', 
				'../img/stereo2.png',
				'../img/abouttime.png',
				'../img/maru.png',
				'../img/laveta.png',
				'../img/mama.png',
				'../img/kodo.png',
				'../img/damo2.png',
				'../img/thank.png',
			];

			displayPhotos(cafePhotos);
		}

		function clearResults() {
			const photos = document.getElementById('photos');
			const searchInput = document.getElementById('searchInput');
			photos.innerHTML = ''; // clear previous results
			searchInput.value = '';
		}

		function displayPhotos(photoURLs) {
	        const photos = document.getElementById('photos');
	        photos.innerHTML = ''; // clear previous results

	        // create a container for the grid
		    const gridContainer = document.createElement('div');
		    gridContainer.classList.add('photo-grid');

		    photoURLs.forEach((url, index) => {
		        // create a grid item
		        const gridItem = document.createElement('div');
		        gridItem.classList.add('grid-item');

		        // create an image element
		        const img = document.createElement('img');
		        img.src = url;
		        img.alt = 'Cafe Photo';
		        img.classList.add('photo');

		        // append the image to the grid item
		        gridItem.appendChild(img);

		        // append the grid item to the container
		        gridContainer.appendChild(gridItem);

		        // insert a line break after every 3 images (except for the last row)
		        if ((index + 1) % 3 === 0 && index !== photoURLs.length - 1) {
		            gridContainer.appendChild(document.createElement('br'));
		        }
		    });

		    // append the container to the main photos div
		    photos.appendChild(gridContainer);

	       //  photoURLs.forEach(url => {
        //     const img = document.createElement('img');
        //     img.src = url;
        //     img.alt = 'Cafe Photo';
        //     img.classList.add('photo');
        //     photos.appendChild(img);
        // });

		}

	</script>
@endsection