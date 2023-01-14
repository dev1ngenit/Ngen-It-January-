<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Order\UserOrderController;



Route::get('/client/login',     [ClientController::class, 'ClientLogin'])->name('client.login');
Route::post('client/register',  [ClientController::class, 'clientRegisterStore'])->name('clientRegister.store');
Route::post('client/login',     [ClientController::class, 'clientLoginStore'])->name('client.loginstore');

Route::group(['middleware' => ['auth:client']], function() {
Route::get ('client/dashboard',       [ClientController::class, 'ClientDashboard'])  ->name('client.dashboard');
Route::get ('client/profile',         [ClientController::class, 'ClientProfile'])  ->name('client.profile');
Route::get ('client/profile_update',  [ClientController::class, 'ClientProfileUpdate'])  ->name('client.profile_update');
Route::post('client/profile/store',   [ClientController::class, 'ClientProfileStore'   ])  ->name('client.profile.store');
Route::get('client/change/password',  [ClientController::class, 'ClientChangePassword'])->name('client.change.password');
Route::post('client/update/password', [ClientController::class, 'ClientUpdatePassword'])->name('client.update.password');
Route::get('client/logout',     [ClientController::class, 'clientDestroy'])->name('client.logout');





Route::get ('client/track',           [ClientController::class, 'ClientTrack'])  ->name('client.track');
Route::get ('client/rfq',             [ClientController::class, 'ClientRFQ'])  ->name('client.rfq');


// });

// Route::middleware('auth')->group(function () {



 // User Dashboard All Route
 Route::controller(UserOrderController::class)->group(function(){
    Route::get('/user/account/page' , 'UserAccount')->name('user.account.page');
    Route::get('/user/change/password' , 'UserChangePassword')->name('user.change.password');

    Route::get('/user/order/page' , 'UserOrderPage')->name('user.order.page');

    Route::get('/user/order_details/{order_id}' , 'UserOrderDetails');
    Route::get('/user/invoice_download/{order_id}' , 'UserOrderInvoice');

    Route::post('/return/order/{order_id}' , 'ReturnOrder')->name('return.order');

    Route::get('/return/order/page' , 'ReturnOrderPage')->name('return.order.page');

     // Order Tracking
     Route::get('/user/track/order' , 'UserTrackOrder')->name('user.track.order');
     Route::post('/order/tracking' , 'OrderTracking')->name('order.tracking');


   });



});
