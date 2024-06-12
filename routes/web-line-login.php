<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Webpanel as Webpanel;

use App\Http\Controllers\Functions as Functions;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\LocationController;






Route::get('/line-login', [LoginController::class, 'index']);
Route::get('/login/line', [LoginController::class, 'redirectToProvider'])->name('login.line');
Route::get('/login/line/callback', [LoginController::class, 'handleProviderCallback']);
Route::post('/check-location', [LocationController::class, 'checkLocation']);
Route::get('/location-check', [LocationController::class, 'index']);
