<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Social\SocialAuthController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUser;
use App\Http\Middleware\IsVendor;
use Illuminate\Support\Facades\Route;

// LANGUAGE SWITCHER
Route::get('/locale/{locale}', function ($locale) {
    if (in_array($locale, ['fr', 'en'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('locale.switch');

// FRONTEND ROUTES
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/categories', [CategoryController::class, 'categories'])->name('categorie');
Route::get('/produit', [CategoryController::class, 'product'])->name('produit');
Route::get('/panier', [CartController::class, 'cart'])->name('panier');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('/success', [CartController::class, 'success'])->name('success');

// PROFILE ROUTES
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth', IsUser::class])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// SOCIALE MEDIA ROUTES
Route::prefix('auth')->name('social.')->group(function () {
    Route::get('/{provider}/redirect', [SocialAuthController::class, 'redirectToProvider'])
        ->name('redirect')
        ->where('provider', 'google|facebook');

    Route::get('/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback'])
        ->name('callback')
        ->where('provider', 'google|facebook');
});

// VENDOR ROUTES
Route::prefix('vendor')->middleware(['auth', IsVendor::class])->group(function () {
    Route::get('/dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
    Route::get('/logout', [VendorController::class, 'destroy'])->name('vendor.logout');

    // CATÉGORIES
    // SOUS CATÉGORIES
    // MARQUES
    // PRODUITS
    // IMAGES
});

// ADMIN ROUTES
Route::prefix('admin')->middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/logout', [AdminController::class, 'destroy'])->name('admin.logout');

    // CATÉGORIES
    // SOUS CATÉGORIES
    // MARQUES
    // PRODUITS
    // IMAGES
});

require __DIR__.'/auth.php';
