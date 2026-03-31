<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('login', [AuthController::class, 'loginForm'])->middleware('throttle:5,1')->name('login.attempt');
Route::view('dashboard', 'dashboard')->name('dashboard');

Route::post('register', [AuthController::class, 'registerForm'])->name('register.store');

Route::post('logout', function(Request $request) {
    Auth::guard('web')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');
