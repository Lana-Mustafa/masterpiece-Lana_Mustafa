<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierProfileController;
use App\Http\Controllers\SupplierproductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
/* Route::get('/test', function () {
    return view('layouts.public');
}); */
Route::get('/test', function () {
    return view('public_site.checkout');
});

/*Public Routes*/
Route::get('/',[PublicController::class,'index'])->name('landingPage');
Route::get('/shop',[PublicController::class,'showShop'])->name('shop');
Route::post('/shop',[PublicController::class,'search'])->name('shop');

Route::get('/shopByCategory/{id}',[PublicController::class,'showShopByCategory'])->name('shopByCategory');
Route::get('/shopBySubcategory/{id}',[PublicController::class,'showShopBySubcategory'])->name('shopBySubcategory');
Route::get('/singleProduct/{id}',[PublicController::class,'showSingleProductPage'])->name('singleProductPage');

Route::get('/sellers',[PublicController::class,'showSellers'])->name('sellers');
Route::get('/sellers/{id}',[PublicController::class,'showSeller'])->name('seller');

Route::get('/addToCart/{product}',[PublicController::class,'addToCart'])->name('cart.add');
Route::get('/shopping-cart',[PublicController::class,'showCart'])->name('cart.show');
Route::get('/checkout/{amount}',[PublicController::class,'checkout'])->name('cart.checkout')->middleware('auth');
Route::post('/charge',[PublicController::class,'charge'])->name('cart.charge');
Route::delete('/cartproducts/{cartproduct}',[PublicController::class,'destroy'])->name('cartproduct.remove');
Route::put('/cartproducts/{cartproduct}',[PublicController::class,'update'])->name('cartproduct.update');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/order/{id}', [App\Http\Controllers\HomeController::class, 'showOrder'])->name('order.show');

// login Routes for Admin
Route::get('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm']);
Route::post('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login');
// logout Route for Admin
Route::post('/admin/logout', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.logout');

//login Routes for Supplier
Route::get('/supplier/login', [App\Http\Controllers\Auth\SupplierLoginController::class, 'showLoginForm']);
Route::post('/supplier/login', [App\Http\Controllers\Auth\SupplierLoginController::class, 'login'])->name('supplier.login');
// logout Route for Admin
Route::post('/supplier/logout', [App\Http\Controllers\Auth\SupplierLoginController::class, 'logout'])->name('supplier.logout');
//Register Route for Supplier
Route::get('/supplier/register', [App\Http\Controllers\Auth\SupplierRegisterController::class, 'showRegistrationForm']);
Route::post('/supplier/register', [App\Http\Controllers\Auth\SupplierRegisterController::class, 'register'])->name('supplier.register');


Route::group(["prefix" => "admin" , "middleware" =>"assign.guard:admin,admin/login" ], function(){
    Route::get("dashboard" , function(){
 
        return view("dashboard.home");
    })->name('admin.dashboard');
    Route::resource('admins', AdminController::class)->middleware('admin');
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubcategoryController::class); 
    Route::resource('subcategories', SubcategoryController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::get('showSubcategories/{id}',[ProductController::class,'showSubcategory']);
    Route::resource('users', UserController::class);
    Route::get('/gallery/{id}', [ ProductController::class, 'gallery'])->name('gallery.show');
    Route::get('/gallery/{id}/edit', [ ProductController::class, 'editgallery'])->name('gallery.edit');
    Route::patch('/gallery/{id}', [ ProductController::class, 'updateGallery'])->name('gallery.update');
    Route::delete('/gallery/{id}', [ ProductController::class, 'destroyGallery'])->name('gallery.destroy');
    Route::get('/changepassword', [AdminProfileController::class, 'changePasswordForm'])->name('admin.changepassword');
    Route::post('/changepassword', [AdminProfileController::class, 'changePassword'])->name('admin.changepassword');
    Route::get('/profile', [AdminProfileController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/{id}', [AdminProfileController::class, 'updateProfile'])->name('admin.updateProfile');
    Route::get('markAsRead', function () {
        /* dd(Auth::user()); */
        Auth::user()->unreadNotifications->markAsRead();
         return redirect()->back();
    })->name('markRead');



});
Route::group(["prefix" => "supplier" , "middleware" =>"assign.guard:supplier,supplier/login" ], function(){
    Route::get("dashboard" , function(){
        return view("customized_dashboard.home");
    })->name('supplier.dashboard');
    Route::resource('supplierproducts', SupplierproductController::class);
    Route::get('showSubcategories/{id}',[SupplierproductController::class,'showSubcategory']);
    Route::resource('images', ImageController::class);
    Route::get('/changepassword', [SupplierProfileController::class, 'changePasswordForm'])->name('supplier.changepassword');
    Route::post('/changepassword', [SupplierProfileController::class, 'changePassword'])->name('supplier.changepassword');
    Route::get('/profile', [SupplierProfileController::class, 'profile'])->name('supplier.profile');
    Route::post('/profile/{id}', [SupplierProfileController::class, 'updateProfile'])->name('supplier.updateProfile');


});

Route::group([ "middleware" =>"auth" ], function(){
   
    Route::get('/profile', [UserProfileController::class, 'profile'])->name('user.profile');
    Route::post('/profile/{id}', [UserProfileController::class, 'updateProfile'])->name('user.updateProfile');
    Route::get('/changepassword', [UserProfileController::class, 'changePasswordForm'])->name('user.changepassword');
    Route::post('/changepassword', [UserProfileController::class, 'changePassword'])->name('user.changepassword');

});