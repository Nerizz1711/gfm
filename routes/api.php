<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Webpanel as Webpanel;
use App\Http\Controllers\Api as Api;

use Laravel\Sanctum\Http\Controllers\AuthenticatedSessionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::post('/customer/login', [Api\Frontend\CustomerController::class, 'login']);

    Route::get('/customer', [Api\Frontend\CustomerController::class, 'getCustomer']);
    Route::get('/customer/{id}', [Api\Frontend\CustomerController::class, 'findCustomer'])->where(['id' => '[0-9]+']);

    Route::get('/cleaner', [Api\Frontend\CleanerController::class, 'getCleaner']);
    Route::get('/cleaner/{id}', [Api\Frontend\CleanerController::class, 'findCleaner'])->where(['id' => '[0-9]+']);
    Route::get('/cleaner-in-customer/{id}', [Api\Frontend\CleanerController::class, 'findCleanerInCustomer'])->where(['id' => '[0-9]+']);


    Route::get('/getAttendanceRecords/{id}', [Api\Frontend\AttendanceController::class, 'getAttendanceRecords'])->where(['id' => '[0-9]+']);
    Route::get('/getAttendanceFromCleaner/{id}', [Api\Frontend\AttendanceController::class, 'getAttendanceFromCleaner'])->where(['id' => '[0-9]+']);

    Route::get('/notificationOfCustomer/{id}', [Api\Frontend\AttendanceController::class, 'notiToCustomer'])->where(['id' => '[0-9]+']);

    Route::put('/attendance-records/{id}/noti-status', [Api\Frontend\AttendanceController::class, 'updateNotiStatus'])->where(['id' => '[0-9]+']);

    // Route::group(['middleware' => ['auth:sanctum', 'abilities:User']], function () {
    //     Route::get('/findPeermissionVideo/{id}', [Api\PeermissionController::class, 'findVideo'])->where(['id' => '[0-9]+']);

    //     Route::prefix('user')->group(function () {
    //         Route::post('/register/pincode', [Api\Frontend\UserController::class, 'pincode']);
    //         Route::post('/register/interest', [Api\Frontend\UserController::class, 'interest']);


    //         Route::post('/me', [Api\Frontend\AuthController::class, 'me']);
    //         Route::post('/changeProfile', [Api\Frontend\AuthController::class, 'change_profile']);

    //         Route::get('/takePoint/{id}', [Api\PeermissionController::class, 'takePoint'])->where(['id' => '[0-9]+']);

    //         Route::post('/forgetpass', [Api\Frontend\UserController::class, 'foget_otp']);

    //         Route::get('/getcart', [Api\Frontend\CartController::class, 'getCart']);
    //         Route::post('/cart', [Api\Frontend\CartController::class, 'cart']);
    //         Route::post('/updateCart', [Api\Frontend\CartController::class, 'updateCart']);
    //         Route::post('/getCartOrder', [Api\Frontend\CartController::class, 'getCartOrder']); // เส้นก่อนชำระเงินดึงสินค้าออกมา
    //         Route::post('/submitOrder', [Api\Frontend\CartController::class, 'submitOrder']); // เส้นก่อนชำระเงินดึงสินค้าออกมา

    //         // Order
    //         Route::get('/getOrders', [Api\Frontend\CartController::class, 'getOrders']); // ดีงข้อมูลรายการสั่งซื้อ

    //     });
    // });
});
