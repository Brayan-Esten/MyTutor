<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
        'title' => 'Home',
        'active' => 'home'
    ]);
});


Route::get('/about/{nama?}/{jurusan?}', function ($nama = null, $jurusan = null) {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'nama' => $nama,
        'jurusan' => $jurusan
    ]);
});


// kurung kurawal itu parameter, auto inject ke method 'detail' di class TutorController
// {method_name} --> param wajib
// {method_name?} --> param optional

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/{post:slug}', [PostController::class, 'detail']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Category List',
        'active' =>'category',
        'data' => Category::all()
    ]);
});