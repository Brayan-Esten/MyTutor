<?php

namespace App\Http\Controllers;

// kek import package di java
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title .= " in $category->name";
        }

        if (request('username')) {
            $user = User::firstWhere('username', request('username'));
            $title .= " by $user->name";
        }

        return view('post', [
            'title' => "All Posts $title",
            'active' => 'posts',
            'data' => Post::with('category', 'user')->latest()
                        ->filter(request(['search', 'category', 'username']))
                        ->paginate(7)->withQueryString()
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
