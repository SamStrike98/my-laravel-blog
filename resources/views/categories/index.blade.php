<x-layout>
    <h1>All Categories</h1>

    <ul class="grid grid-cols-3 gap-3">
        @foreach($categories as $category)
            <li>
                <a href="{{ Route("categories.show", $category->id) }}">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $category->name }}</div>
                    <p class="text-gray-700 text-base">
                    {{ $category->description}}
                    </p>
                </div>
                </div>
                </a>
            </li>
        
            
                
        @endforeach
    </ul>
</x-layout>