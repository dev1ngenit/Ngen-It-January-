<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Order\UserOrderController;

Route::get('/client/login',     [ClientController::class, 'ClientLogin'])->name('client.login')->middleware(RedirectIfAuthenticated::class);
Route::post('client/register',  [ClientController::class, 'clientRegisterStore'])->name('clientRegister.store');
Route::post('client/login',     [ClientController::class, 'clientLoginStore'])->name('client.loginstore');

Route::group(['prefix' => 'client', 'middleware' => ['auth','role:client']], function () {
Route::get ('/dashboard',       [ClientController::class, 'ClientDashboard'])  ->name('client.dashboard');
Route::get ('/profile',         [ClientController::class, 'ClientProfile'])  ->name('client.profile');
Route::get ('/profile_update',  [ClientController::class, 'ClientProfileUpdate'])  ->name('client.profile_update');
Route::post('/profile/store',   [ClientController::class, 'ClientProfileStore'   ])  ->name('client.profile.store');
Route::get ('/track',           [ClientController::class, 'ClientTrack'])  ->name('client.track');


// });

// Route::middleware('auth')->group(function () {
Route::get('client/logout',     [ClientController::class, 'clientDestroy'])->name('client.logout');


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
