<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Livewire\Aboutus;
use App\Livewire\Contact;
use App\Livewire\News;
use App\Livewire\NewsDetail;
use App\Livewire\Products;
use App\Livewire\ProductDetail;

// Public home (dashboard-style landing)
Route::get('/', function () {
    return view('livewire.dashboard');
})->name('home');

// Authenticated dashboard
Route::view('dashboard', 'livewire.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// About Us Livewire page
Route::get('/about-us', Aboutus::class)
    ->name('about.us');

Route::get('/news', News::class)
    ->name('news'); 

Route::get('/news/{slug}', NewsDetail::class)->name('news.show');

Route::get('/contact', Contact::class)
    ->name('contact');
    
Route::get('/products', Products::class)
    ->name('products');

Route::get('/products/{slug}', ProductDetail::class)
    ->name('products.show');

Route::view('/terms-and-conditions', 'livewire.terms')->name('terms');
Route::view('/privacy-policy', 'livewire.privacy')->name('privacy');

// Other routes
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
});
