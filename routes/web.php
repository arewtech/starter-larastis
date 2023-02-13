<?php

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

Route::redirect('/', '/dashboard');

// if you want to use e-mail verify, set "verified" | (['auth', 'verified']) in middleware,
// and open comment in route FortifyServiceProvider *verifyEmailView *
Route::middleware('auth')->group(function(){
    Route::get('dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::get('change-profile', function () {
        return view('dashboard.profile.index');
    })->name('profile');
});
