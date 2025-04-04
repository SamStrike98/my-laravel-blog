<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('category')->orderBy('created_at', 'desc')->paginate(10);
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

    public function edit(Post $post) {
        $post->load('category');
        $categories = Category::all();
        return view('posts.edit', ["post" => $post, "categories" => $categories]);
    }

    public function update(Request $request, Post $post) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:20|max:1000',
            'category_id' => 'required|exists:categories,id'
        ]);

        $post->update($validated);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post) {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
