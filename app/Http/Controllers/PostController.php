<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts.index', ["posts" => $posts]);
    }

    public function show(Post $post) {
        $post->load('category');

        return view('posts.show', ["post" => $post]);
    }

    public function create() {
        $categories = Category::all();
        return view('posts.create', ["categories" => $categories]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:20|max:1000',
            'category_id' => 'required|exists:categories,id'
        ]);

        Post::create($validated);

        return redirect()->route('posts.index');
    }
}
