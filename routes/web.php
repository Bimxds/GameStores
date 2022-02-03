<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


Route::get('/home', [GameController::class, 'index']);
Route::get('/', function(){
    return redirect('/home');
});


Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [UserController::class, 'UserRegister'])->name('register');
Route::post('/login', [UserController::class, 'LoginUser'])->name('login');


Route::get('logout', function () {
    Session::flush();
    Session::forget('user');
    Auth::logout();
    return redirect('/');
});

Route::get('/home/gameDetail/{id}', [GameController::class, 'gameDetail']);
Route::get('/account/{username}/profile', [UserController::class, 'getProfile']);
Route::get('/account/{username}/history', [UserController::class, 'getHistory']);
Route::post('/update', [UserController::class, 'updateProfile']);


Route::post('/home/gameDetail/{id}/checkAge', [GameController::class, 'checkAge']);
Route::get('/account/{username}/friends', function (){
    return view('friends');
});
Route::get('/manage', [AdminController::class, 'index']);
Route::get('/manage/{id}/delete', [AdminController::class, 'deleteGames']);
Route::get('/manage/{id}', [AdminController::class, 'indexUpdate']);
Route::put('/manage/{id}/update', [AdminController::class,'update']);
Route::get('/insert', function(){
    return view('insert');
});
Route::post('/insert/game', [AdminController::class, 'insert']);
Route::get('/home/search', [GameController::class, 'search']);
Route::get('/cart', [UserController::class, 'viewCart']);
Route::post('/addToCart', [UserController::class, 'addToCart']);
Route::get('/payment', [UserController::class, 'payment']);

Route::post('/checkPayment', [UserController::class, 'checkPayment']);

