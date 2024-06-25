<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ShopController::class, 'index'])->name('shop.index');
Route::get('/detail/{shop_id}', [ShopController::class, 'detail'])->name('shop.detail');

Route::middleware(['auth'])->group(function () {
    Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

    Route::post('/favorite', [FavoriteController::class, 'store'])->name('favorite.store');

    Route::delete('/favorite/{id}', [FavoriteController::class, 'destroy'])->name('favorite.destroy');

    Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');

    Route::get('/search/area', [ShopController::class, 'searchByArea'])->name('shop.searchByArea');
    Route::get('/search/genre', [ShopController::class, 'searchByGenre'])->name('shop.searchByGenre');
    Route::get('/search/name', [ShopController::class, 'searchByName'])->name('shop.searchByName');

});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/thank-you', function () {
    return view('auth.thank_you');
})->name('thank-you');

// require __DIR__ . '/auth.php';