<?php


use App\Models\Category;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\TransactionController;


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

// register route
Route::get('/register', [RegisterController::class, 'index'])->middleware(('guest'));
Route::post('/register', [RegisterController::class, 'store']);


// login route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);


// home
Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

// about
Route::get('/about', function(){
    return view('about', [
        'title' => 'About'
    ]);
});


// book route
Route::get('/book', [TransactionController::class, 'index']);

Route::post('/book/tutor', [TransactionController::class, 'tutor']);



Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Category List',
        'active' =>'category',
        'data' => Category::all()
    ]);
});



Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){

    return view('dashboard.index');

})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('test/design', function(){
    return view('tutor', [
        'title' => 'test',
        'active' => 'test'
    ]);
});