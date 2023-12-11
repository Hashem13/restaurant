<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;



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

Route::get('/', function () {
    return view('home'); // Replace 'welcome' with the name of your home view
})->name('home');
Route::get('/about', function () {
    return view('about');
});
Route::get('/menu', function () {
    return view('menu'); 
})->name('menu');
// Route::get('/booking', function () {
//     return view('booking');
// });
Route::get('/registration', function () {
    return view('registration');
});

Route::get('/booking', function () {
    return view('booking');
})->middleware('auth');
Route::post('/book-table', [BookingController::class, 'bookTable'])->name('book.table');




Route::get('/register', [UserController::class, 'create'])->name('register.create');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::put('/menu/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');


Route::get('/my-bookings', [BookingController::class, 'myBookings'])->name('myBookings');

Route::get('/admin-panel', [AdminController::class, 'index'])->name('admin.panel');
Route::post('/admin/upgrade/{id}', [AdminController::class, 'upgradeUser'])->name('admin.upgrade');
Route::post('/admin/accept-booking/{id}', [AdminController::class, 'acceptBooking'])->name('admin.accept');
Route::post('/admin/decline-booking/{id}', [AdminController::class, 'declineBooking'])->name('admin.decline');