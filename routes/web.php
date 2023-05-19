<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Order;
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
    return view('home', [
        'header' => "Welcome!"
    ]);
});

Route::get('/sql', function(){
    return view('sql', [
        'header' => "MySQL Demo"
    ]);
});

Route::get('/orders', [OrderController::class, 'index'])->middleware('auth');

Route::get('/orders/create', [OrderController::class, 'create'])->middleware('auth');

Route::post('/orders', [OrderController::class, 'store'])->middleware('auth');

Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->middleware('auth');

Route::put('/orders/{order}', [OrderController::class, 'update'])->middleware('auth');

Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->middleware('auth');

Route::get('/orders/{order}', [OrderController::class, 'show'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/login', [UserController::class, 'authenticate']);

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');