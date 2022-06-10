<?php


use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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


// kurung kurawal itu parameter, auto inject ke method 'detail' di class PostController
// {method_name} --> param wajib
// {method_name?} --> param optional

Route::get('/post', [PostController::class, 'index']); // panggil class PostController method index()

Route::get('/post/{post:slug}', [PostController::class, 'detail']); // pangil class PostController method detail()

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Category List',
        'active' =>'category',
        'data' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware(('guest'));
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){

    return view('dashboard.index');

})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');