<x-layout>
    <div class="bg-white rounded-md p-5">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->category->name }}</p>

        <p>{{ $post->content }}</p>

        <a href="{{ Route('posts.edit', $post->id) }}">Edit</a>

        <form action="{{ Route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
</x-layout>