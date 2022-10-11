<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'test'])->name('test');
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/test', function () {
    return view('auth.login2');
});

Auth::routes(['verify'=> true,'resend'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/index', [App\Http\Controllers\IndexController::class, 'test'])->name('test');
Route::get('/myaccount', [App\Http\Controllers\IndexController::class, 'showuser'])->name('showuser');
Route::get('/dashboard-user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::delete('/dashboard-user/delete/{id}',[App\Http\Controllers\UserController::class,'destroy'] )->name('user.delete');
Route::get('/dashboard-user/edit/{id}',[App\Http\Controllers\UserController::class,'edit'] )->name('user.edit');
Route::get('/dashboard-user/show/{id}',[App\Http\Controllers\UserController::class,'show'] )->name('user.show');
Route::put('/dashboard-user/update/{id}',[App\Http\Controllers\UserController::class,'update'] )->name('user.update');
Route::get('/dashboard-user/create',[App\Http\Controllers\userController::class,'create'] )->name('user.create');
Route::post('/dashboard-user/store',[App\Http\Controllers\userController::class,'store'] )->name('user.store');
Route::get('/search',[App\Http\Controllers\ProductController::class,'search'] )->name('product.search');
Route::get('/search/show/{id}',[App\Http\Controllers\IndexController::class,'show'] )->name('search.show');
Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
// Route::resource('user',App\Http\Controllers\UserController::class);
Route::get('auth/facebook', 'App\Http\Controllers\SocialController@facebookRedirect');
Route::get('auth/facebook/callback', 'App\Http\Controllers\SocialController@loginWithFacebook');
