<x-layout>
    <h1>All Posts</h1>

    <ul>
        @foreach($posts as $post)
            <li><a href="{{ Route("posts.show", $post->id) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</x-layout>