<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
});

// Route::get('/checkout', function () {
//     return view('user/checkout');
// });

Route::get('/admin/order-lists', function () {
    return view('admin/order-lists');
});

// Route::get('/admin/order-details', function () {
//     return view('admin/order-details');
// });

//buat login admin
Route::get('/admin/register', function () {
    return view('adminnew/register');
});
Route::get('/admin/setting', function () {
    return view('adminnew/setting');
});

Route::get('/admin/create-product-1', function () {
    return view('adminnew/create-product');
});
Route::get('/admin/transaction', function () {
    return view('adminnew/transactions');
});
Route::get('/admin/shipping', function () {
    return view('adminnew/shipping');
});


Route::post('/admin/register', [AdminController::class, 'handleRegister']);
Route::get('/admin/login', function () {
    return view('adminnew/login');
});

// admin features
// Route::get('/admins/edit-product/{id}', [ProductController::class, 'testviewEditProduct']);

Route::post('/admin/login', [AdminController::class, 'handleLogin']);

//forgot password admmin
Route::get('/admin-forgot-password', function () {
    return view('admin.forgot-password');
})->middleware('guest')->name('password.request');
Route::post('/admin-forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

//buat login user
Route::get('/register', function () {
    return view('user/register');
});

Route::get('/shopping-cart', function () {
    return view('user/shop-cart');
});
Route::post('/createcart', [CartController::class, 'createCart']);

Route::get('/payment', function () {
    return view('user/payment');
});

Route::get('/payment-process', function () {
    return view('user/after-payment');
});

Route::get('/index', [ProductController::class, 'testviewProduct'])->name('testviewProduct');

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/product-detail/{id}', [ProductController::class, 'testviewProductbyID'])->name('testviewProductbyID');

// Route::get('/view-product/{id}', [ProductController::class, 'usrviewProductbyID'])->name('usrviewproductID');


Route::post('/register', [UserController::class, 'handleRegister']);
Route::get('/login', function () {
    return view('user/login');
})->name('login');
Route::post('/login', [UserController::class, 'handleLogin']);
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

//forgot password user
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

//reset password
Route::get('/reset-password/{token}', function (Request $request, $token) {
    session()->flashInput($request->input());
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

//forget password admin
Route::get('/admin/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm']);
Route::post('/admin/forgot-password', [ForgotPasswordController::class, 'sendLinkRequestForm'])->name('admin.forgot-password');

Route::middleware(['auth:admin'])->group(function(){
    //admin create product
    Route::get('/admin/create-product', function () {
        return view('adminnew/create-product');
    });
    Route::post('/admin/create-product', [ProductController::class, 'createProductPublish']);

    Route::post('/admin/create-product-draft', [ProductController::class, 'createProductDraft']);

    // Admin Banner
    Route::get('/admin/banner', [BannerController::class, 'viewAllBanner']);
    Route::post('/admin/create-banner', [BannerController::class, 'createBanner']);
    Route::post('/admin/toggle-banner/{id}', [BannerController::class, 'toggleBanner']);
    Route::post('/admin/delete-banner/{id}', [BannerController::class, 'deleteBanner']);
    
    //ADMIN view all product & spec product
    Route::get('/admin/view-product', [ProductController::class, 'viewProduct'])->name('viewproduct');
    Route::get('/admin/view-product/{id}', [ProductController::class, 'viewProductbyID'])->name('viewproductID');

    //DAFTAR Pesanan
    Route::get('/admin/order-lists', [OrderController::class, 'viewAllOrder']);
    Route::post('/admin/updateOrder', [OrderController::class, 'updateStatusOrder']);

    //ADMIN Search
    // Route::get('/search-product', [ProductController::class, 'searchProduct']);
    Route::post('/admin/search-product', [ProductController::class, 'adminSearchProduct']);

    //edit product
    Route::get('/admin/edit-product/{id}', [ProductController::class, 'viewEditProduct']);
    Route::post('/admin/edit-product/{id}', [ProductController::class, 'updateProduct']);
    
    //delete product
    Route::get('/admin/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('deleteproductID');
    Route::post('/admin/logout', [AdminController::class, 'logout']);
});

//view all product & spec product
Route::get('/search-product', [ProductController::class, 'searchProduct']);
Route::post('/search-product', [ProductController::class, 'searchProduct']);
Route::get('/view-product', [ProductController::class, 'usrviewProduct'])->name('usrviewproduct');
Route::get('/view-product/{id}', [ProductController::class, 'usrviewProductbyID'])->name('usrviewproductID');

Route::post('/create-cart', [CartController::class, 'createCart']);
Route::post('/update-cart', [CartController::class, 'updateCart']);
Route::post('/delete-cart', [CartController::class, 'deleteCart']);
Route::get('/view-cart', [CartController::class, 'viewCart']);

Route::get('/checkout', [OrderController::class, 'createOrder']);
Route::post('/checkout', [OrderController::class, 'createOrder']);

Route::get('/view-order', [OrderController::class, 'viewOrder']);

Route::get('/order', function(){
    return view('usernew/order');
});


Route::middleware(['auth'])->group(function(){
});

// cart
// Route::get()