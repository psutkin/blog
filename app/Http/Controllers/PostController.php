<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostController extends Controller
{
    public function index() {
        $posts = Post::orderByDesc('id')->take(6)->get()->sort();
        return view('index', compact('posts'));
    }

    public function articles() {
        $posts = Post::paginate(10);
        return view('articles', compact('posts'));
    }

    public function slug(Post $slug) {
        return view('slug', compact('slug'));
    }
}
