<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel Blog</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-[#f2f2f2]">
    <header class="bg-white h-[80px] flex flex-col items-center justify-center">
        <nav class="h-full w-[90%] max-w-[1200px] flex flex-row items-center justify-between">
            <h1><a href="{{ Route('posts.index') }}">My Laravel Blog</a></h1>
            <div class="flex flex-row gap-10">
                <a href="{{ Route('posts.index') }}">All Posts</a>
                <a href="{{ Route('categories.index') }}">All Categories</a>
            </div>
            <div>
                <a href="{{ Route('posts.create') }}">Create New Post</a>
            </div>
        </nav>
        

    </header>

    <main class="container">
        {{ $slot }}
    </main>
    
</body>
</html>