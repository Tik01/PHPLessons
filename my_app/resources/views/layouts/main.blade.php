
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Main</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar">
                <ul>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about.index') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link"  href="{{ route('contact.index') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link"  href="{{ route('main.index') }}">Main</a></li>
                    <li class="nav-item"><a class="nav-link"  href="{{ route('post.index') }}">Posts</a></li>
                    <li class="nav-item"><a class="nav-link"  href="{{ route('admin.post.index') }}">Admin</a></li>
                </ul>
            </nav>
    </div>
    <br><br>
        @yield('content')
    </div>
</body>
</html>
