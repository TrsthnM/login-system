<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('login', [AuthController::class, 'loginForm'])->name('login.attempt');
Route::view('dashboard', 'dashboard')->name('dashboard');

Route::post('logout', function() {
    Auth::guard('web')->logout();

    Session::invalidate();
    Session::regenerateToken();

    return redirect('/');
})->name('logout');
