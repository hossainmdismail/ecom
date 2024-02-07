<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ShippingController;
use App\Http\Controllers\Admin\VariationController;
use App\Http\Controllers\Admin\VariationOptionController;
use App\Http\Controllers\AdminOrder;
use App\Http\Controllers\CategoryController as ControllersCategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Frontend
//Auth::routes();

Route::get('/', [FrontendController::class, 'home'])->name('index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products/{slugs}', [ControllersProductController::class, 'single'])->name('product.view');
Route::post('/add/cart', [ControllersProductController::class, 'cart'])->name('addtocart');
Route::get('/categories/{slugs}', [ControllersCategoryController::class, 'index'])->name('front.category');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/features', [FeaturesController::class, 'features'])->name('features');
Route::get('/hot-deal', [FeaturesController::class, 'hot'])->name('hot');
Route::post('/order',[OrderController::class, 'order'])->name('user.order');

Route::middleware(['admin'])->prefix('sd_admin')->group(function () {
    //Admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/country', CountryController::class);
    Route::get('/create/admin', [AdminController::class, 'create_admin'])->name('create.admin');
    Route::post('/create/role/admin', [AdminController::class, 'create_role_admin'])->name('create.role.admin');
    Route::get('/order',[AdminOrder::class, 'order'])->name('admin.order');
    Route::resource('/category', CategoryController::class);
    Route::resource('/banner', BannerController::class);
    Route::resource('/config', ConfigController::class);
    Route::resource('/campaign', CampaignController::class);
    Route::resource('/variation', VariationController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/shipping', ShippingController::class);
    Route::resource('/variation_option', VariationOptionController::class);
    Route::resource('/campaign-product', CampaignController::class);
    Route::resource('/employee',EmployeeController::class);
});



Route::get('/sd_admin/register', [AdminController::class, 'admin_register'])->name('admin.register');
Route::post('/sd_admin/store', [AdminController::class, 'admin_store'])->name('admin.store');
Route::get('/sd_admin/login', [AdminController::class, 'admin_login'])->name('admin.login');
Route::POST('/sd_admin/logout', [AdminController::class, 'admin_logout'])->name('admin.logout');
Route::post('/sd_admin/adminlogin', [AdminController::class, 'adminlogin'])->name('adminlogin');

