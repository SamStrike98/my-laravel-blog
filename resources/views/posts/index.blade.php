<x-layout>
    <h1>All Posts</h1>

    <ul class="grid grid-cols-3 gap-3">
        @foreach($posts as $post)


            <li>
                <a href="{{ Route("posts.show", $post->id) }}">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                    <p class="text-gray-700 text-base">
                    {{ Str::words($post->content, 15) }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href="{{ Route("categories.show", $post->category->id) }}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $post->category->name }}</span></a>
                </div>
                </div>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>