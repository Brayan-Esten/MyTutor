<?php

use App\Models\Tutor;
use Illuminate\Support\Facades\Route;


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


Route::get('/book', function () {

    return view('book', [
        'title' => 'Book-a-Tutor',
        'data' => Tutor::all()
    ]);
});

Route::get('/book/{slug}', function ($slug) {

    return view('detail', [
        'title' => 'Detail',
        'data' => Tutor::find($slug)
    ]);
});
