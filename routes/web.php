<?php


use App\Models\Category;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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

// logout route
Route::post('/logout', [LoginController::class, 'logout']);


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


// membership
Route::get('/membership', function(){
    return view('membership', [
        'title' => 'Membership'
    ]);
});

Route::post('/upgrade/{membership:id}', [TransactionController::class, 'upgrade']);


// book route

// display subjects
Route::get('/book', [TransactionController::class, 'index'])
->middleware('auth');

// display available tutors
Route::get('/book/tutor', [TransactionController::class, 'tutor'])
->middleware('auth');

// checkout
Route::get('/book/checkout/{tutor}/{field}/{edulvl}/{date}/{start_time}', [TransactionController::class, 'checkout'])
->middleware('auth');

// receipt
Route::post('/book/receipt/{tutor}/{field}/{edulvl}/{date}/{start_time}', [TransactionController::class, 'receipt'])
->middleware('auth');



// dashbooard routes

Route::get('/dashboard/schedule', [DashboardController::class, 'schedule'])
->middleware('auth');

Route::get('/dashboard/history', [DashboardController::class, 'history'])
->middleware('auth');