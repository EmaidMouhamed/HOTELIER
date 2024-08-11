<?php

use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',  [AcceuilController::class,'acceuil'])->name('front.acceuil');
Route::get('/About',  [AcceuilController::class,'about'])->name('front.about');
Route::get('/Services',  [AcceuilController::class,'services'])->name('front.services');
Route::get('/Rooms',  [AcceuilController::class,'rooms'])->name('front.rooms');
Route::get('/Booking',  [AcceuilController::class,'booking'])->name('front.booking');
Route::get('/Team',  [AcceuilController::class,'team'])->name('front.team');
Route::get('/Testimonial',  [AcceuilController::class,'testimonial'])->name('front.testimonial');
Route::get('/Contact',  [AcceuilController::class,'contact'])->name('front.contact');


Route::prefix('admin/')->middleware('auth:web')->group(function () {
    Route::view('/', 'admin.pages.main')->name('dashboard');

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
