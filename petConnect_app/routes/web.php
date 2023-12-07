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

Route::get('/', [HomeController::class,'homePage'])->name('home');
Route::get('about', [AboutController::class,'aboutPage']);
Route::get('blog', [BlogController::class,'blogPage']);
Route::get('blog/post', [PostController::class,'postPage']);
Route::get('login', [LoginController::class,'loginPage']);
Route::get('register', [RegisterController::class,'registerPage']);
Route::get('catalog', [CatalogController::class,'catalogPage']);
Route::get('catalog/detail', [DetailController::class,'detailPage']);
Route::post('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
Route::get('test', [ProductController::class, 'testPage'])->name('test');
Route::post('/add-user', [UserController::class, 'addUser'])->name('add.user');

