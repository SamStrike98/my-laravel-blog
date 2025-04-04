<x-layout>
    <div class="w-full flex flex-row justify-between gap-10 bg-white p-5 rounded">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="w-full">
            @csrf
            @method('PUT')
            <h1>Create a New Post</h1>

            {{-- POST TITLE --}}
            <label for="title">Post Title:</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}" required>

            {{-- POST CONTENT --}}
            <label for="content">Post Content:</label>
            <textarea rows="5" id="content" name="content" required>{{ $post->content }}</textarea>

            {{-- SELECT A CATEGORY --}}
            <label for="category_id">Category:</label>
            <select id="category_id" name="category_id" requried>
                {{-- <option value="" disabled selected>Select a Category</option> --}}
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category->id == $category->id ? "selected" : "" }}>{{ $category->name }}</option>
                @endforeach
            </select>

            <button type="submit">Update Post</button>
        </form>

        <form action="{{ route('categories.store') }}" method="POST" class="w-full">
            @csrf
            <h1>Add a New Category</h1>

            {{-- CATEGORY NAME --}}
            <label for="name">Category Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>

            {{-- CATEGORY DESCRIPTION --}}
            <label for="description">Category Description:</label>
            <textarea rows="5" id="description" name="description" required>{{ old('description') }}</textarea>

            <button type="submit">Add Category</button>
        </form>
    </div>
</x-layout>