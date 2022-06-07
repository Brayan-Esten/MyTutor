<?php

use App\Models\Tutor;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;


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


Route::get('/membership', function () {
    return view('membership', [
        'title' => 'Membership'
    ]);
});

Route::get('/about/{nama?}/{jurusan?}', function ($nama = null, $jurusan = null) {
    return view('about', [
        'title' => 'About',
        'nama' => $nama,
        'jurusan' => $jurusan
    ]);
});


Route::get('/book', [TutorController::class, 'index']);


// kurung kurawal itu parameter, auto inject ke method 'detail' di class TutorController
// {method_name} --> param wajib
// {method_name?} --> param optional

Route::get('/book/{tutor:slug}', [TutorController::class, 'detail']);

Route::get('/category/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'data' => $category->tutor,
        'category' => $category->name
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Subject Categories',
        'data' => Category::all()
    ]);
});