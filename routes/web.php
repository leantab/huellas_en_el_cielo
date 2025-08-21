<?php

use App\Http\Controllers\SitemapController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.landing', [
        'title' => 'Huellas en el Cielo - Servicios de Cremación para Mascotas'
    ]);
})->name('home');

Route::get('/landing', function () {
    return view('layouts.landing', [
        'title' => 'Huellas en el Cielo - Servicios de Cremación para Mascotas'
    ]);
})->name('landing');

Route::get('/cremacion-mascotas', function () {
    return view('layouts.cremacion-mascotas');
})->name('cremacion-mascotas');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
