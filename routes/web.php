<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});


Route::get('/about/{nama?}/{jurusan?}', function ($nama = null, $jurusan = null) {
    return view('about', [
        'title' => 'About',
        'nama' => $nama,
        'jurusan' => $jurusan
    ]);
});


Route::get('/post', [PostController::class, 'index']);


// kurung kurawal itu parameter, auto inject ke method 'detail' di class TutorController
// {method_name} --> param wajib
// {method_name?} --> param optional

Route::get('/post/{post:slug}', [PostController::class, 'detail']);

Route::get('/category/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'data' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Category List',
        'data' => Category::all()
    ]);
});