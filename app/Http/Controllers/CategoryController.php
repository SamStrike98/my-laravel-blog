<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categories.index', ["categories" => $categories]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'string|min:20|max:1000'
        ]);

        Category::create($validated);

        return redirect()->route('posts.create');
    }

    public function show(Category $category) {

        $posts = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->get();

        return view('categories.show', ["posts" => $posts, "category" => $category]);
    }
}
