<?php


use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;

use App\Http\Controllers\Partner\PartnerController;




//Route::get('partner/register',  [PartnerController::class, 'index'])->name('partner.index');
Route::get('partner/login',  [PartnerController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('partner/register',  [PartnerController::class, 'reg'])->name('partner.store');
Route::post('/partner/login', [PartnerController::class, 'Partnerlogin'])->name('partner.login')->middleware(RedirectIfAuthenticated::class);

// Route::get('partner/dashboard', [PartnerController::class, 'dashboard'])->name('partner.dashboard');

Route::group(['middleware' => ['auth:partner']], function() {

    Route::get('partner/dashboard', [PartnerController::class, 'dashboard'])->name('partner.dashboard');
    Route::get('partner/logout', [PartnerController::class, 'logout'])->name('partner.logout');
    // Category All Route
    // Route::controller(CategoryController::class)->group(function(){
    //     Route::get('/all/category' , 'AllCategory')->name('all.category');
    //     Route::get('/add/category' , 'AddCategory')->name('add.category');
    //     Route::post('/store/category' , 'StoreCategory')->name('store.category');
    //     Route::get('/edit/category/{id}' , 'EditCategory')->name('edit.category');
    //     Route::post('/update/category' , 'UpdateCategory')->name('update.category');
    //     Route::get('/delete/category/{id}' , 'DeleteCategory')->name('delete.category');

    // });



});


