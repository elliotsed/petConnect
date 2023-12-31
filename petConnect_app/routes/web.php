<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('about', [AboutController::class, 'aboutPage']);
Route::get('blog', [BlogController::class, 'blogPage']);
Route::get('blog/post/{id}', [PostController::class, 'postPage'])->name('post');
Route::get('catalog', [CatalogController::class, 'catalogPage']);
Route::get('catalog/detail/{id}', [DetailController::class, 'detailPage'])->name('detail');
Route::post('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
Route::post('/add-post', [PostController::class, 'addPost'])->name('add.post');
Route::post('/add-user', [UserController::class, 'addUser'])->name('add.user');
Route::post('/log-user', [LoginController::class, 'login'])->name('log.user');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('order', [DetailController::class, 'addOrder'])->name('add.order');
Route::delete('delete/order/{id}', [DashboardController::class, 'delete'])->name('delete.order');




//middleware sur la page dashboard
Route::group(['middleware' => 'web'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard')->middleware('auth');
    Route::get('login', [LoginController::class, 'loginPage'])->name('login')->middleware('guest');
    Route::get('register', [RegisterController::class, 'registerPage'])->name('register')->middleware('guest');

});
