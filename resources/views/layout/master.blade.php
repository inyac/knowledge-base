<html lang="en">
    <head>
        <title>@yield('title') | Knowledge Base</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/public/css/style.css">
    </head>

    <body style="margin-bottom: 70px">
        <nav class="navbar navbar-light bg-light">
            <h4 class="navbar-text mr-auto" style="margin-left: 25px">Knowledge Base</h4>
            <ul class="nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">My Articles</a>
                    </li>

                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Log Out</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/users/create" class="nav-link">Sign Up</a>
                    </li>
                @endif
            </ul>

            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="/articles/create" class="form-inline btn btn-outline-primary">Create Article</a>
            @else
                <a href="/login" class="form-inline btn btn-outline-primary">Login</a>
            @endif

        </nav>

        <div class="container" style="margin-top: 20px">
            <div class="col-md-9 mx-auto">
                @yield('section')
            </div>
        </div>
    </body>

</html>