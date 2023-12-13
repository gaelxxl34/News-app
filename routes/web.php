<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\FirebaseAuthController;

// Firebase Authentication Routes
Route::get('login', [FirebaseAuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [FirebaseAuthController::class, 'login']);
// Define a route for the forget password form submission
Route::post('forget-password', [FirebaseAuthController::class, 'sendPasswordResetLink'])->name('forget-password.action');
Route::get('/forget-password', [FirebaseAuthController::class, 'showForgetPasswordForm'])->name('forget-password');

Route::get('register', [FirebaseAuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [FirebaseAuthController::class, 'register']);
Route::post('logout', [FirebaseAuthController::class, 'logout'])->name('logout');
Route::get('home', [FirebaseAuthController::class, 'home'])->name('home');


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
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

// Route::get('login', function () {
//     return view('login');
// });

Route::get('home', function () {
    return view('home');
});

Route::get('trial', function () {
    return view('trial');
});


