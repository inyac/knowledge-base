<html lang="en">
    <head>
        <title>@yield('title') | Knowledge Base</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/public/css/style.css">
    </head>

    <body style="margin-bottom: 70px">
        <nav class="navbar navbar-light bg-light">
            <h4 class="navbar-text" style="margin-left: 25px">Knowledge Base</h4>
            <a href="/articles/create" class="float-right form-inline btn btn-outline-primary">Create Article</a>
        </nav>

        <div class="container" style="margin-top: 20px">
            <div class="col-md-9 mx-auto">
                @yield('section')
            </div>
        </div>
    </body>

</html>