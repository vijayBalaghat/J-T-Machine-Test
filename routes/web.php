<?php

use App\Http\Controllers\SocialLoginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

// Facebook Login
Route::get('auth/facebook',[SocialLoginController::class,'getFBuser'])->name('fb.login');
Route::get('auth/facebook/callback',[SocialLoginController::class,'getFBCallback'])->name('fb.callback');

// Google Login
Route::get('auth/google',[SocialLoginController::class,'getGoogleuser'])->name('gmail.login');
Route::get('auth/google/callback',[SocialLoginController::class,'getGoogleCallback'])->name('gmail.callback');

Route::view('dashboard','dashboard');
Route::get('/logout', function () {
    session()->forget('facebook');
    session()->forget('google');
    Auth::logout();
    return view('auth.login');
});
