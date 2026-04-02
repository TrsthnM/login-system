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
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::post('login', [AuthController::class, 'loginForm'])->middleware('throttle:5,1')->name('login.attempt');
Route::view('dashboard', 'dashboard')->name('dashboard');

Route::view('forgotPassword', 'forgotPassword')->name('forgotPassword');
Route::post('forgotPassword', [AuthController::class, 'forgotPasswordForm'])->name('forgotPassword.submit');
Route::get('forgotPassword/{token}', [AuthController::class, 'forgotPasswordLinkForm'])->name('forgotPassword.link');
Route::post('forgotPassword/email/submit', [AuthController::class, 'resetPasswordForm'])->name('forgotPassword.reset');

Route::post('register', [AuthController::class, 'registerForm'])->name('register.store');

Route::post('logout', function(Request $request) {
    Auth::guard('web')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');
