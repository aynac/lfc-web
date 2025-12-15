<?php

use App\Http\Controllers\Admin\FixtureController as AdminFixtureController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StandingController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\FixtureController as UserFixtureController;
use App\Http\Controllers\GalleryController;
use App\Models\MatchModel;
use Illuminate\Support\Facades\Auth;

//* Public Routes */
Route::get('/', [UserController::class, 'home'])->name('home'); 
Route::get('/players', [UserController::class, 'players'])->name('players');
Route::get('/news', [UserController::class, 'news'])->name('news');
Route::get('/store', [UserController::class, 'store'])->name('store');
Route::get('/highlight', [UserController::class, 'highlight'])->name('highlight');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
    
// Route::view('/donation', 'user.donation')->name('donation');

// Route::prefix('user')->name('user.')->group(function () {
//     Route::get('/fixture', [UserFixtureController::class, 'index'])->name('fixture.index');
//     Route::get('/fixture/{match}', [UserFixtureController::class, 'show'])->name('fixture.show');
// });

//* User / Guest routes
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/fixture', [UserFixtureController::class, 'index'])->name('fixture.index');
    Route::get('/fixture/{match}', [UserFixtureController::class, 'show'])->name('fixture.show');
});

//* User Product 
Route::prefix('products')->name('user.product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
});

//* User Cart ~ Required logged in
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
});

//* For User ~ restricted
// Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
//    
//
// });

//* role protection - Admin
Route::middleware(['auth', 'role:admin'])->group(function(){

        //* Fixture
        Route::prefix('fixture')->name('fixture.')->group(function () {
            Route::get('/', [AdminFixtureController::class, 'index'])->name('index');
            Route::get('/create', [AdminFixtureController::class, 'create'])->name('create');
            Route::post('/', [AdminFixtureController::class, 'store'])->name('store');
            Route::get('/{fixture}/edit', [AdminFixtureController::class, 'edit'])->name('edit');
            Route::put('/{fixture}', [AdminFixtureController::class, 'update'])->name('update');
            Route::delete('/{fixture}', [AdminFixtureController::class, 'destroy'])->name('destroy');
            
            Route::get('/result', [AdminFixtureController::class, 'result'])->name('result');
            Route::post('/result', [AdminFixtureController::class, 'result'])->name('storeResult');
        });


        //* Standing
        Route::prefix('standing')->name('standing.')->group(function () {
            Route::get('/', [StandingController::class, 'index'])->name('index');
            Route::get('/create', [StandingController::class, 'create'])->name('create');
            Route::post('/', [StandingController::class, 'store'])->name('store');
            Route::get('/{standing}/edit', [StandingController::class, 'edit'])->name('edit');
            Route::put('/{standing}', [StandingController::class, 'update'])->name('update');
            Route::delete('/{standing}', [StandingController::class, 'destroy'])->name('destroy');
        });

        // Products
        // Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        // Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        // Route::post('/products', [ProductController::class, 'store'])->name('products.store');
        // Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
        // Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

        // Orders
        // Route::get('/order', [OrderController::class, 'index'])->name('order.index');
        // Route::get('/order/{order}', [OrderController::class, 'show'])->name('order.show');
        // Route::patch('/orders/{order}/status/{status}', [OrderController::class, 'updateStatus'])->name('orders.status');
        
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/user/password', [ProfileController::class, 'updatePassword'])
     ->middleware('auth')
     ->name('user.password.update');
});

require __DIR__.'/auth.php';
