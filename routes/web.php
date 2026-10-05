<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FormController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PetVisitController;
use App\Http\Controllers\Admin\PackageInquiryController;
use App\Http\Controllers\Admin\ContactInquiryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;


Route::post('/submit/pet-visit', [FormController::class, 'submitPetVisit'])->name('submit.petvisit');
Route::post('/submit/package',   [FormController::class, 'submitPackage'])->name('submit.package');
Route::post('/submit/contact',   [FormController::class, 'submitContact'])->name('submit.contact');

// ── Thank You Page ──
Route::get('/thank-you', fn() => view('frontend.thank-you'))->name('thank.you');

Route::get('/', function () {
    $latestBlogs = \App\Models\Blog::with('category')->published()->latest()->take(3)->get();
    return view('frontend.index', compact('latestBlogs'));
});

Route::get('about-us', function(){
    return view('frontend.about-us');
})->name('about');

Route::get('cat-grooming', function(){
    return view('frontend.cat-grooming');
})->name('cat-grooming');

Route::get('dog-grooming', function(){
    return view('frontend.dog-grooming');
})->name('dog-grooming');

Route::get('pet-nutritionist', function(){
    return view('frontend.pet-nutritionist');
})->name('pet-nutritionist');

Route::get('vet-home-visit', function(){
    return view('frontend.vet-home-visit');
})->name('vet-home-visit');

Route::get('vet-video-call', function(){
    return view('frontend.vet-video-call');
})->name('vet-video-call');

Route::get('privacy-policy', function(){
    return view('frontend.privacy-policy');
})->name('privacy-policy');

Route::get('refund-policy', function(){
    return view('frontend.refund-policy');
})->name('refund-policy');

Route::get('terms-and-conditions', function(){
    return view('frontend.terms-and-conditions');
})->name('terms-and-conditions');

Route::get('gallery', function(){
    return view('frontend.gallery');
})->name('gallery');

Route::get('blogs', [FrontendBlogController::class, 'index'])->name('blog');
Route::get('blogs/{slug}', [FrontendBlogController::class, 'show'])->name('blog.detail');

Route::get('contact-us', function(){
    return view('frontend.contact-us');
})->name('contact');


Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// ── Admin Panel (auth protected) ──
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Pet Visits
    Route::get('/pet-visits',                    [PetVisitController::class, 'index'])->name('pet-visits.index');
    Route::get('/pet-visits/{petVisit}',         [PetVisitController::class, 'show'])->name('pet-visits.show');
    Route::patch('/pet-visits/{petVisit}/status', [PetVisitController::class, 'updateStatus'])->name('pet-visits.status');
    Route::delete('/pet-visits/{petVisit}',      [PetVisitController::class, 'destroy'])->name('pet-visits.destroy');

    // Packages
    Route::get('/packages',                           [PackageInquiryController::class, 'index'])->name('packages.index');
    Route::get('/packages/{packageInquiry}',          [PackageInquiryController::class, 'show'])->name('packages.show');
    Route::patch('/packages/{packageInquiry}/status', [PackageInquiryController::class, 'updateStatus'])->name('packages.status');
    Route::delete('/packages/{packageInquiry}',       [PackageInquiryController::class, 'destroy'])->name('packages.destroy');

    // Contacts
    Route::get('/contacts',                          [ContactInquiryController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contactInquiry}',         [ContactInquiryController::class, 'show'])->name('contacts.show');
    Route::patch('/contacts/{contactInquiry}/status', [ContactInquiryController::class, 'updateStatus'])->name('contacts.status');
    Route::delete('/contacts/{contactInquiry}',      [ContactInquiryController::class, 'destroy'])->name('contacts.destroy');

    // Blog Categories
    Route::resource('categories', CategoryController::class);
    Route::patch('/categories/{category}/toggle-status', [CategoryController::class, 'toggleStatus'])->name('categories.toggle-status');

    // Blogs
    Route::resource('blogs', AdminBlogController::class);
    Route::patch('/blogs/{blog}/toggle-status', [AdminBlogController::class, 'toggleStatus'])->name('blogs.toggle-status');
});
