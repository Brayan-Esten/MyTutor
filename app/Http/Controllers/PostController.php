<?php

namespace App\Http\Controllers;



use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            'title' => 'All Posts',
            'active' => 'posts',
            'data' => Post::latest()->get()
            // 'data' => Post::all()
        ]);
    }

    public function detail(Post $post)
    {
        return view('detail', [
            'title' => 'Post Detail',
            'active' =>'posts',
            'post' => $post
        ]);
    }
}
