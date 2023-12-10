<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

// Add this line inside the web.php file
Route::post('/firebase/login', [FirebaseController::class, 'login']);

// Logout route
Route::post('/logout', function () {
    request()->session()->flush();  // Clear the session
    return redirect('/');           // Redirect to the home page or login page
})->name('logout');
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

Route::get('login', function () {
    return view('login');
});

Route::get('trial', function () {
    return view('trial');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
