<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ReviewController;

Route::get('/', fn() => redirect('/id'));

// ==============================
// User (Bahasa Indonesia /id)
// ==============================
Route::prefix('id')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home.id');
    Route::get('/about', [PageController::class, 'about'])->name('about.id');
    Route::get('/logo', [PageController::class, 'logo'])->name('logo.id');
    Route::get('/practice', [PageController::class, 'practice'])->name('practice.id');
    Route::get('/news', [PageController::class, 'news'])->name('news.id');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact.id');

    // Gallery & Review (Bahasa ID)
    Route::get('/gallery', [GalleryController::class, 'indexID'])->name('gallery.index.id');
    Route::get('/gallery/{id}', [GalleryController::class, 'showID'])->name('gallery.show.id');
    Route::post('/gallery/{id}/review', [GalleryController::class, 'storeReview'])->name('gallery.review.id');
});

// ==============================
// User (English /en)
// ==============================
Route::prefix('en')->group(function () {
    Route::get('/', [PageController::class, 'homeEn'])->name('home.en');
    Route::get('/about', [PageController::class, 'aboutEn'])->name('about.en');
    Route::get('/logo', [PageController::class, 'logoEn'])->name('logo.en');
    Route::get('/practice', [PageController::class, 'practiceEn'])->name('practice.en');
    Route::get('/news', [PageController::class, 'newsEn'])->name('news.en');
    Route::get('/contact', [PageController::class, 'contactEn'])->name('contact.en');

    // Gallery & Review (Bahasa EN)
    Route::get('/gallery', [GalleryController::class, 'indexEN'])->name('gallery.index.en');
    Route::get('/gallery/{id}', [GalleryController::class, 'showEN'])->name('gallery.show.en');
    Route::post('/gallery/{id}/review', [GalleryController::class, 'storeReview'])->name('gallery.review.en');
});

// ==============================
// Admin Auth
// ==============================
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// ==============================
// Admin Panel (dengan auth & is_admin)
// ==============================
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        if (Auth::user() && Auth::user()->is_admin) {
            return view('admin.dashboard');
        }
        Auth::logout();
        return redirect()->route('admin.login')->withErrors([
            'email' => 'Akses hanya untuk admin.',
        ]);
    })->name('admin.dashboard');

    // Galeri
    Route::resource('/gallery', AdminGalleryController::class)->names('admin.gallery');

    // Review
    Route::get('/reviews', [ReviewController::class, 'index'])->name('admin.reviews.index');
    Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');

    // User
    Route::resource('/users', UserController::class)->names('admin.users');
    Route::post('/users/{id}/verify', [UserController::class, 'verify'])->name('admin.users.verify');
});

// ==============================
// Alihkan default /login ke admin login
// ==============================
Route::get('/login', fn() => redirect()->route('admin.login'))->name('login');
