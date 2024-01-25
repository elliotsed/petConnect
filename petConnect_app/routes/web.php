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
use App\Http\Controllers\CartController;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\NewsletterController;

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
Route::get('cart', [CartController::class, 'cartPage'])->name('cart');
Route::get('blog', [BlogController::class, 'blogPage']);
Route::get('blog/post/{id}', [PostController::class, 'postPage'])->name('post');
Route::get('catalog', [CatalogController::class, 'catalogPage']);
Route::get('dogsByRace/{id}', [CatalogController::class, 'dogsByRace'])->name('dogsbyrace');
Route::get('catalog/detail/{id}', [DetailController::class, 'detailPage'])->name('detail');
Route::post('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
Route::post('/add-post', [PostController::class, 'addPost'])->name('add.post');
Route::post('/add-user', [UserController::class, 'addUser'])->name('add.user');
Route::post('/log-user', [LoginController::class, 'login'])->name('log.user');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('order/{id}', [DetailController::class, 'addOrder'])->name('add.order');
Route::delete('delete/order/{id}', [CartController::class, 'deleteOrder'])->name('delete.order');
Route::delete('delete/post/{id}', [DashboardController::class, 'deletePost'])->name('delete.post');
Route::delete('delete/product/{id}', [DashboardController::class, 'deleteProduct'])->name('delete.product');
Route::put('update/product/{id}', [DashboardController::class, 'updateProduct'])->name('update.product');
Route::put('update/post/{id}', [DashboardController::class, 'updatePost'])->name('update.post');
Route::post('/subscribe-newsletter', [NewsletterController::class, 'subscribe'])->name('subscribe.newsletter');
Route::put('/profile/update', [DashboardController::class, 'updateUser'])->name('profile.update');


// Route::prefix('admin')->namespace('Back')->group(function () {
//     Route::get('/', [AdminController::class, 'index'])->name('admin');
// });





//middleware sur la page dashboard
Route::group(['middleware' => 'web'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard')->middleware('auth');
    Route::get('login', [LoginController::class, 'loginPage'])->name('login')->middleware('guest');
    Route::get('register', [RegisterController::class, 'registerPage'])->name('register')->middleware('guest');

});
