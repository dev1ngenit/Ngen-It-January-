<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\RFQController;
use App\Http\Controllers\Admin\RowController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ClientPermission;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Order\ReportController;
use App\Http\Controllers\Order\ReturnController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\PartnerPermission;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SuccessController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\SolutionController;
use App\Http\Controllers\Admin\BrandPageController;
use App\Http\Controllers\Admin\LearnMoreController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Admin\RowWithColController;
use App\Http\Controllers\Admin\TechGlossyController;
use App\Http\Controllers\Order\AdminOrderController;
use App\Http\Controllers\Admin\ClientStoryController;
use App\Http\Controllers\Admin\IndustryPageController;
use App\Http\Controllers\Admin\SolutionCardController;
use App\Http\Controllers\Admin\SolutionDetailsController;



Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login')->middleware(RedirectIfAuthenticated::class);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {

     // Admin Profile All Route
    Route::get('/dashboard',        [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/logout',           [AdminController::class, 'AdminDestroy'])->name('admin.logout');
    Route::get('/profile',          [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/profile/store',    [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/change/password',  [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/update/password',  [AdminController::class, 'AdminUpdatePassword'])->name('update.password');

    // Category All Route
    Route::resource('category', CategoryController::class);
    Route::controller(CategoryController::class)->group(function () {

        // Route::get('category', 'index')->name('category.index');
        // Route::get('category/create', 'create')->name('category.create');
        // Route::post('category', 'store')->name('category.store');
        // Route::get('category/{id}/edit',  'edit')->name('category.edit');
        // Route::put('category/{id}', 'update')->name('category.update');
        // Route::delete('category/{id}','destroy')->name('category.destroy');

        Route::post('/store/sub_category', 'StoreSubCategory')->name('store.subcategory');
        Route::post('/store/sub_sub_category', 'StoreSubSubCategory')->name('store.subsubcategory');
        Route::post('/store/sub_sub_sub_category', 'StoreSubSubSubCategory')->name('store.subsubsubcategory');
        Route::put('subcategory/{id}', 'UpdateSubCategory')->name('update.subcategory');
        Route::put('subsubcategory/{id}', 'UpdateSubSubCategory')->name('update.subsubcategory');
        Route::put('subsubsubcategory/{id}', 'UpdateSubSubSubCategory')->name('update.subsubsubcategory');
        Route::delete('sub_category/{id}', 'SubCatdestroy')->name('subcategory.destroy');
        Route::delete('sub_sub_category/{id}', 'SubSubCatdestroy')->name('subsubcategory.destroy');
        Route::delete('sub_sub_sub_category/{id}', 'SubSubSubCatdestroy')->name('subsubsubcategory.destroy');
    });



    // Brand All Route
    Route::resource('brand', BrandController::class);

    // Success All Route
    Route::resource('success', SuccessController::class);


    // Setting All Route
    Route::resource('setting', SettingController::class);

    // Product All Route
    Route::controller(ProductController::class)->group(function () {
        Route::get('/all/product', 'AllProduct')->name('all.product');
        Route::get('/add/product', 'AddProduct')->name('add.product');
        Route::post('/store/product', 'StoreProduct')->name('store.product');
        Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product');
        Route::post('/update/product', 'UpdateProduct')->name('update.product');
        Route::post('/update/product/thambnail', 'UpdateProductThambnail')->name('update.product.thambnail');
        Route::post('/update/product/multiimage', 'UpdateProductMultiimage')->name('update.product.multiimage');
        Route::delete('/product/multiimg/delete/{id}', 'MulitImageDelelte')->name('product.multiimg.delete');

        Route::get('/product/inactive/{id}', 'ProductInactive')->name('product.inactive');
        Route::get('/product/active/{id}', 'ProductActive')->name('product.active');
        //Route::get('/delete/product/{id}' , 'ProductDelete')->name('delete.product');
        Route::delete('/delete/product/{id}', 'ProductDelete')->name('product.destroy');

        // For Product Stock
        Route::get('/product/stock', 'ProductStock')->name('product.stock');
    });

    // SolutionAll Route
    Route::resource('solution', SolutionController::class);
    //Contact
    Route::resource('contact', ContactController::class);
    Route::get('/support',    [ContactController::class, 'Support'])->name('support.all');

    //newsletter
    Route::resource('newsLetter', NewsLetterController::class);

    // IndustryAll Route
    Route::controller(IndustryController::class)->group(function () {
        Route::get('industry', 'index')->name('industry.index');
        Route::get('industry/create', 'create')->name('industry.create');
        Route::post('industry', 'store')->name('industry.store');
        Route::get('industry/{id}/edit',  'edit')->name('industry.edit');
        Route::put('industry/{id}', 'update')->name('industry.update');
        Route::delete('industry/{id}', 'destroy')->name('industry.destroy');
    });

    //Client Experience
    Route::resource('clientExperince', ClientController::class);
    //Clients
    Route::resource('clientPermission', ClientPermission::class);
    Route::post('client_status', [App\Http\Controllers\Admin\ClientPermission::class, 'clientStatus'])->name('client.status');

    //partners
    Route::resource('partnerPermission', PartnerPermission::class);
    Route::post('partner_status', [App\Http\Controllers\Admin\PartnerPermission::class, 'partnerStatus'])->name('partner.status');

    //home Page Builder
    Route::resource('homepage', HomepageController::class);

    //Page Builder

    Route::post('pagebuilder/brand', [PageController::class, 'addPage'])->name('addPage');
    Route::get('allpage', [PageController::class, 'allPage'])->name('allpage');
    Route::get('choose', [PageController::class, 'choose']);
    Route::get('pagebuilder/brand', [PageController::class, 'brand']);
    Route::get('/hardware/{brand}', [HomeController::class, 'hardware']);
    Route::get('pagebuilder/brand/delete/{id}', [PageController::class, 'brandDelete']);

    // Route::get('pagebuilder/{id}',[PageBuilderController::class,'delete']);
    // Route::get('pagebuilder/edit/{id}',[PageBuilderController::class,'edit']);
    // Route::post('pagebuilder/update/{id}',[PageBuilderController::class,'update'])->name('updatePage');


    //Page builder Home

    //Route::get('pagebuilder/home', [HomepageController::class, 'home']);
    Route::post('pagebuilder/home', [HomepageController::class, 'addPageHome'])->name('addPageHome');
    Route::get('pagebuilder/home/{id}', [HomepageController::class, 'delete']);


    //Page Builder Category

    Route::get('pagebuilder/category', [CategoryPageController::class, 'category']);
    Route::post('pagebuilder/category', [CategoryPageController::class, 'addPageCategory'])->name('addPageCategory');
    Route::get('category.html/{category}', [HomeController::class, 'category'])->name('category');
    Route::get('pagebuilder/category/delete/{id}', [CategoryPageController::class, 'categoryDelete']);


    // Permission All Route
    Route::controller(RoleController::class)->group(function () {

        Route::get('/all/permission', 'AllPermission')->name('all.permission');
        Route::get('/add/permission', 'AddPermission')->name('add.permission');
        Route::post('/store/permission', 'StorePermission')->name('store.permission');
        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
        Route::delete('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');
    });


    // Roles All Route
    Route::controller(RoleController::class)->group(function () {

        Route::get('/all/roles', 'AllRoles')->name('all.roles');
        Route::get('/add/roles', 'AddRoles')->name('add.roles');
        Route::post('/store/roles', 'StoreRoles')->name('store.roles');
        Route::get('/edit/roles/{id}', 'EditRoles')->name('edit.roles');
        Route::post('/update/roles', 'UpdateRoles')->name('update.roles');
        Route::delete('/delete/roles/{id}', 'DeleteRoles')->name('delete.roles');

        // add role permission
        Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');
        Route::post('/role/permission/store', 'RolePermissionStore')->name('role.permission.store');
        Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
        Route::get('/admin/edit/roles/{id}', 'AdminRolesEdit')->name('admin.edit.roles');
        Route::post('/admin/roles/update/{id}', 'AdminRolesUpdate')->name('admin.roles.update');
        Route::delete('/admin/delete/roles/{id}', 'AdminRolesDelete')->name('admin.delete.roles');
    });
    //blog
    Route::resource('blog', BlogController::class);

    //Row builder
    Route::resource('row', RowController::class);

    //Row with column builder
    Route::resource('rowWithCol', RowWithColController::class);

    //Client Story
    Route::resource('clientstory', ClientStoryController::class);

    //TechGlossy
    Route::resource('techglossy', TechGlossyController::class);

    //Learn More
    Route::resource('learnMore', LearnMoreController::class);



    //Industry Page resource route
    Route::resource('industryPage', IndustryPageController::class);

    //Solution Card resource route
    Route::resource('solutionCard', SolutionCardController::class);

    //Solution Details resource route
    Route::resource('solutionDetails', SolutionDetailsController::class);

    //Policy resource route
    Route::resource('policy', PolicyController::class);

    //Job resource route
    Route::resource('job', JobController::class);



 // Admin Order All Route
Route::controller(AdminOrderController::class)->group(function(){
    Route::get('/pending/order' , 'PendingOrder')->name('pending.order');
    Route::get('/admin/order/details/{order_id}' , 'AdminOrderDetails')->name('admin.order.details');

    Route::get('/admin/confirmed/order' , 'AdminConfirmedOrder')->name('admin.confirmed.order');

    Route::get('/admin/processing/order' , 'AdminProcessingOrder')->name('admin.processing.order');

 Route::get('/admin/delivered/order' , 'AdminDeliveredOrder')->name('admin.delivered.order');

 Route::get('/pending/confirm/{order_id}' , 'PendingToConfirm')->name('pending-confirm');
 Route::get('/confirm/processing/{order_id}' , 'ConfirmToProcess')->name('confirm-processing');

  Route::get('/processing/delivered/{order_id}' , 'ProcessToDelivered')->name('processing-delivered');

  Route::get('/admin/invoice/download/{order_id}' , 'AdminInvoiceDownload')->name('admin.invoice.download');

});


 // Return Order All Route
Route::controller(ReturnController::class)->group(function(){
    Route::get('/return/request' , 'ReturnRequest')->name('return.request');

    Route::get('/return/request/approved/{order_id}' , 'ReturnRequestApproved')->name('return.request.approved');

    Route::get('/complete/return/request' , 'CompleteReturnRequest')->name('complete.return.request');


});


 // Report All Route
Route::controller(ReportController::class)->group(function(){

    Route::get('/report/view' , 'ReportView')->name('report.view');
    Route::post('/search/by/date' , 'SearchByDate')->name('search-by-date');
    Route::post('/search/by/month' , 'SearchByMonth')->name('search-by-month');
    Route::post('/search/by/year' , 'SearchByYear')->name('search-by-year');

    Route::get('/order/by/user' , 'OrderByUser')->name('order.by.user');
    Route::post('/search/by/user' , 'SearchByUser')->name('search-by-user');

});

  //jobRegister
  Route::get('job-register-user', [App\Http\Controllers\Frontend\JobController::class, 'jobRegisterUser'])
  ->name('job.regiserUser');
Route::get('job-register-user/show/{id}', [App\Http\Controllers\Frontend\JobController::class, 'jobRegisterUserShow'])
  ->name('job.regiserUser.show');
Route::delete('job-register-user/{id}', [App\Http\Controllers\Frontend\JobController::class, 'jobRegisterUserDestroy'])
  ->name('job.regiserUser.destroy');
Route::get('job-register-user/download/{id}', [App\Http\Controllers\Frontend\JobController::class, 'jobRegisterUserDownload'])
  ->name('resume.download');

  // RFQ
  Route::resource('rfq', RFQController::class);

  // Feature
  Route::resource('feature', FeatureController::class);
  Route::resource('brandPage', BrandPageController::class);
});
