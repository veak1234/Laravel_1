<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $posts = DB::table('users')->get();
    return view('HomePage',[
        'posts' => $posts,
    ]);
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/product', function () {
    $posts = DB::table('users')->get();
    return view('ProDuct',[
        'posts' => $posts
    ]);
});

Route::get('/users', [UserController::class, 'user']);
