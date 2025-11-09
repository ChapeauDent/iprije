<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Pages services
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/office-365-business', [ServiceController::class, 'office365'])->name('office365');
    Route::get('/creation-web-apps', [ServiceController::class, 'web'])->name('web');
    Route::get('/strategie-marketing', [ServiceController::class, 'marketing'])->name('marketing');
    Route::get('/formation-ia', [ServiceController::class, 'formationIA'])->name('formation-ia');
    Route::get('/formation-jeunes', [ServiceController::class, 'formationJeunes'])->name('formation-jeunes');
});

// Blog public
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Page de test pour les articles
Route::get('/test-article', function () {
    return view('test-article');
})->name('test.article');

// Pages légales
Route::get('/mentions-legales', function () {
    return view('legal.mentions');
})->name('legal.mentions');

Route::get('/politique-confidentialite', function () {
    return view('legal.privacy');
})->name('legal.privacy');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Administration des articles (protégé par authentification)
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('posts', AdminPostController::class);
});

require __DIR__.'/auth.php';
