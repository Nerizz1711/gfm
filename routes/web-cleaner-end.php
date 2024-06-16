<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Webpanel as Webpanel;

use App\Http\Controllers\Functions as Functions;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Cleaner\LocationController;



Route::get('cleaner/line-login', [LoginController::class, 'index']);
Route::get('cleaner/login/line', [LoginController::class, 'redirectToProvider'])->name('login.line');
Route::get('cleaner/login/line/callback', [LoginController::class, 'handleProviderCallback']);
Route::get('cleaner/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['Cleaner']], function () {
    Route::prefix('cleaner')->group(function () {
        // Route::get('/location-check', [LocationController::class, 'index']);
        // Route::post('/check-location', [LocationController::class, 'checkLocation']);
        Route::get('/attendance-check', [LocationController::class, 'index']);
        Route::post('/check-in', [LocationController::class, 'checkIn']);
        Route::post('/check-out', [LocationController::class, 'checkOut']);
        Route::post('/upload-images-before', [LocationController::class, 'uploadImagesBefore']);
        Route::post('/upload-images-after', [LocationController::class, 'uploadImagesAfter']);
    });
});
