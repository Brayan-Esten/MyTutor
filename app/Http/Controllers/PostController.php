<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title .= " by $user->name";
        }

        return view('post', [
            'title' => "All Posts $title",
            'active' => 'post',
            'data' => Post::with('user', 'category', 'user')->latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
            // 'data' => Post::all()
        ]);
    }

    public function detail(Post $post)
    {
        return view('detail', [
            'title' => 'Post Detail',
            'active' =>'post',
            'post' => $post
        ]);
    }
}
