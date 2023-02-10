<?php

use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Home\ShowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\DishController as HomeDishController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Home\FidelityController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/admin', [AdminController::class, 'index'])->name('menu.admin');
Route::get('/fidelities/{id?}/edit', [FidelityController::class, 'edit'])->name('home.fidelities.edit');

Route::prefix('admin')->name('admin.')->middleware('role:Admin')->group(function () {
    Route::redirect('/', '/admin/admin');
    Route::resource('dishes', DishController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('users', UserController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('admin', AdminController::class)->middleware('role:SuperUser')->except('index');
    Route::get('admin', [AdminController::class, 'index'])->middleware('role:Admin')->name('admin.index');
});



Route::prefix('home')->name('home.')->group(function () {
    Route::get('fidelities/create', [FidelityController::class, 'create'])->name('fidelities.create');
    Route::resource('fidelities', FidelityController::class)->middleware('role:Client')->except('create');
});


Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store']);
Route::get('logout', [SessionController::class, 'destroy'])->name('logout');

Route::get('/cart/add/meal/{id?}', [CartController::class, 'addMealToCart'])->name('cart.meal.add');
Route::get('/cart/final/user/{id?}', [CartController::class, 'finalCart'])->name('cart.final');
Route::post('/cart/confirm', [CartController::class, 'store'])->name('cart.store');

//Route::get('/show', [ShowController::class, 'index'])->name('dish.show');
Route::resource('dishes', HomeDishController::class);
