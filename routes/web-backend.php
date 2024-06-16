<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Webpanel as Webpanel;

use App\Http\Controllers\Functions as Functions;





Route::get('webpanel/login', [Webpanel\AuthController::class, 'getLogin']);

Route::post('webpanel/login', [Webpanel\AuthController::class, 'postLogin']);

Route::get('webpanel/logout', [Webpanel\AuthController::class, 'logOut']);







Route::group(['middleware' => ['Webpanel']], function () {

    Route::prefix('webpanel')->group(function () {

        Route::get('/', [Webpanel\DashboardController::class, 'index']);

        Route::prefix('administrator')->group(function () {
            Route::prefix('user')->group(function () {
                Route::get('/', [Webpanel\Administrator\UserController::class, 'index']);
                Route::get('/add', [Webpanel\Administrator\UserController::class, 'add']);
                Route::post('/add', [Webpanel\Administrator\UserController::class, 'insert']);
                Route::get('/edit/{id}', [Webpanel\Administrator\UserController::class, 'edit'])->where(['id' => '[0-9]+']);
                Route::post('/edit/{id}', [Webpanel\Administrator\UserController::class, 'update'])->where(['id' => '[0-9]+']);
                Route::get('/destroy/{id}', [Webpanel\Administrator\UserController::class, 'destroy'])->where(['id' => '[0-9]+']);
                Route::get('/status/{id}', [Webpanel\Administrator\UserController::class, 'status'])->where(['id' => '[0-9]+']);
            });

            Route::prefix('permission')->group(function () {
                Route::get('/', [Webpanel\Administrator\PermissionController::class, 'index']);
                Route::get('/add', [Webpanel\Administrator\PermissionController::class, 'add']);
                Route::post('/add', [Webpanel\Administrator\PermissionController::class, 'insert']);
                Route::get('/edit/{id}', [Webpanel\Administrator\PermissionController::class, 'edit'])->where(['id' => '[0-9]+']);
                Route::post('/edit/{id}', [Webpanel\Administrator\PermissionController::class, 'update'])->where(['id' => '[0-9]+']);
                Route::get('/destroy/{id}', [Webpanel\Administrator\PermissionController::class, 'destroy'])->where(['id' => '[0-9]+']);
                Route::get('/status/{id}', [Webpanel\Administrator\PermissionController::class, 'status'])->where(['id' => '[0-9]+']);
            });
        });

        Route::prefix('customer')->group(function () {
            Route::get('/', [Webpanel\Setting\CustomerController::class, 'index']);
            Route::get('/add', [Webpanel\Setting\CustomerController::class, 'add']);
            Route::post('/add', [Webpanel\Setting\CustomerController::class, 'insert']);
            Route::get('/edit/{id}', [Webpanel\Setting\CustomerController::class, 'edit'])->where(['id' => '[0-9]+']);
            Route::post('/edit/{id}', [Webpanel\Setting\CustomerController::class, 'update'])->where(['id' => '[0-9]+']);
            Route::get('/destroy/{id}', [Webpanel\Setting\CustomerController::class, 'destroy'])->where(['id' => '[0-9]+']);
        });

        Route::prefix('cleaner')->group(function () {
            Route::get('/', [Webpanel\Setting\CleanerController::class, 'index']);
            Route::get('/add', [Webpanel\Setting\CleanerController::class, 'add']);
            Route::post('/add', [Webpanel\Setting\CleanerController::class, 'insert']);
            Route::get('/edit/{id}', [Webpanel\Setting\CleanerController::class, 'edit'])->where(['id' => '[0-9]+']);
            Route::post('/edit/{id}', [Webpanel\Setting\CleanerController::class, 'update'])->where(['id' => '[0-9]+']);
            Route::get('/destroy/{id}', [Webpanel\Setting\CleanerController::class, 'destroy'])->where(['id' => '[0-9]+']);
        });

        Route::prefix('attendance')->group(function () {
            Route::get('/', [Webpanel\Setting\AttendanceController::class, 'index']);
            Route::get('/add', [Webpanel\Setting\AttendanceController::class, 'add']);
            Route::post('/add', [Webpanel\Setting\AttendanceController::class, 'insert']);
            Route::get('/edit/{id}', [Webpanel\Setting\AttendanceController::class, 'edit'])->where(['id' => '[0-9]+']);
            Route::post('/edit/{id}', [Webpanel\Setting\AttendanceController::class, 'update'])->where(['id' => '[0-9]+']);
            Route::get('/destroy/{id}', [Webpanel\Setting\AttendanceController::class, 'destroy'])->where(['id' => '[0-9]+']);
            Route::get('/show/{id}', [Webpanel\Setting\AttendanceController::class, 'show'])->where(['id' => '[0-9]+']);
        });
    });
});
