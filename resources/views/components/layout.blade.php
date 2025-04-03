<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel Blog</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>My Laravel Blog</h1>
            <div>
                <a href="{{ Route('posts.index') }}">All Posts</a>
                <a href="#">php</a>
                <a href="#">c#</a>
                <a href="#">JavaScript</a>
                <a href="#">Python</a>
            </div>
            <div>
                <a href="#">Login</a>
                <a href="#">Register</a>
                <a href="#">Logout</a>
            </div>
            <div>
                <a href="{{ Route('posts.create') }}">Create New Post</a>
            </div>
        </nav>
        

    </header>

    <main>
        {{ $slot }}
    </main>
    
</body>
</html>