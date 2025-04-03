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

    public function show($id) {
        return view('posts.show', ["id" => $id]);
    }

    public function create() {
        $categories = Category::all();
        return view('posts.create', ["categories" => $categories]);
    }
}
