<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserAffiliateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

Route::get('/', function () {
return view('welcome');
})->name('home');
Route::get('/register', function () {
    $via = request('via', null);
    // set browser cookie for 7 days = 10080 mins
    if ($via) {
        Cookie::queue('via', $via, 10080);
    }
    return view('auth.register', compact('via'));
})->middleware('guest')->name('register');
Route::get('/registration-successful', function () { return view('registration-success');})->name('registration-successful');
Route::get('/privacy', function(){ return view('privacy'); })->name('privacy');
Route::get('/terms', function(){ return view('terms'); })->name('terms');
Route::get('/contact', function(){ return view('contact'); })->name('contact');
Route::post('/send-msg', [UserAffiliateController::class, 'contactUsSendMsg'])->name('contactUsSendMsg');
Route::get('/register-affiliate', [UserAffiliateController::class, 'registerForm'])->name('register-affiliate');
Route::post('/register-affiliate', [UserAffiliateController::class, 'registerAffiliate'])->name('registerAffiliate');
Route::post('/login-affiliate', [UserAffiliateController::class, 'loginAffiliate'])->name('loginAffiliate');
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/user-dashboard', [DashboardController::class, 'index'])->name('user-dashboard');
});
Route::middleware('auth:affiliate')->group(function () {
    Route::get('/dashboard-affiliate', [UserAffiliateController::class, 'dashboardAffiliate'])->name('dashboardAffiliate');
});

