<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GoogleController;
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

//buat login admin
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::post('/admin/register', [AdminController::class, 'handleRegister']);
Route::get('/admin/login', function () {
    return view('admin/login');
});
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

Route::middleware(['auth:admin'])->group(function(){
    //admin create product
    Route::get('/admin/create-product', function () {
        return view('product/createproduct');
    });
    Route::post('/admin/create-product', [ProductController::class, 'createProductPublish']);
    
    //view all product & spec product
    Route::get('/admin/view-product', [ProductController::class, 'viewProduct'])->name('viewproduct');
    Route::get('/admin/view-product/{id}', [ProductController::class, 'viewProductbyID'])->name('viewproductID');

    //edit product
    Route::get('/admin/edit-product/{id}', [ProductController::class, 'viewEditProduct']);
    Route::post('/admin/edit-product/{id}', [ProductController::class, 'updateProduct']);
    
    //delete product
    Route::get('/admin/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('deleteproductID');
});

//view all product & spec product

Route::middleware(['auth'])->group(function(){
    Route::get('/view-product', [ProductController::class, 'usrviewProduct'])->name('usrviewproduct');
    Route::get('/view-product/{id}', [ProductController::class, 'usrviewProductbyID'])->name('usrviewproductID');
});