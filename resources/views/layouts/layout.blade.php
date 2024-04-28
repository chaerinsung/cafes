<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Fonts */
        @font-face {
			font-family: "luney";
			src: url("../fonts/luney.ttf");
		}

        @font-face {
            font-family: "oliver";
            src: url("../fonts/oliver.ttf");
        }
        /* Footer */
        #footer {
            text-align:center;
            height:60px;
            color: black;
            line-height:60px;
            position: relative;
            bottom: 0;
            font-family: "luney", sans-serif;
            font-size: 2em;
        }
        
        /* Navigation */
        .nav-item {
            padding-right: 5em;
        }

        .nav-link {
            color: grey;
        }

        .nav a:hover {
			color: black;
		}

		.nav-link.disabled {
			font-family: "oliver", sans-serif;
			font-size: 1.2em;
		}

        /* Colors */
        .blue {
            color: #d1e6f5;
        }

        .green {
            color: #ccde9b;
        }

        .pink {
            color: #f5dada;
        }

        .yellow {
            color: #f9e68c;
        }

        .logout {
            color: grey;
        }

        .logout:hover {
            color: black;
        }

        @yield('style')

    </style>
</head>
<body>
    <div class="container mt-3">
        <ul class="nav d-flex justify-content-end">
            @if (Auth::check())
                <li class="nav-item">
                    <a href="{{ route('cafes.home') }}" class="nav-link">home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cafes.index') }}" class="nav-link">cafes</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile.index') }}" class="nav-link">profile</a>
                </li>
                <li>
                    <form method="post" action="{{ route('auth.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link logout">logout</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('cafes.home') }}" class="nav-link">home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('registration.index') }}" class="nav-link">register</a>
                </li>
                <li class="nav-item">
                    <a href="/login" class="nav-link">login</a>
                </li>
            @endif
        </ul>

        @if (session('error'))
            <div class="alert alert-danger mt-3" role="alert">
                {{ session('error') }}
            </div>
        @endif

        @yield('main')
    </div>
</body>
</html>