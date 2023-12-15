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


Route::get('home', [FirebaseAuthController::class, 'Home'])
->middleware('checkrole:user')
->name('home');

Route::get('/admin_dashboard', [FirebaseAuthController::class, 'adminDashboard'])
->middleware('checkrole:admin')
->name('admin_dashboard');

Route::get('/journalist_dashboard', [FirebaseAuthController::class, 'journalistDashboard'])
->middleware('checkrole:journalist')
->name('journalist_dashboard');
// ... other routes ...


// Admin pages routes published-articles
Route::get('/admin/pending-articles', function () {
    return view('admin pages.pending-articles');
})->middleware('checkrole:admin')->name('admin.pending-articles');


Route::get('/admin/single-articles', function () {
    return view('admin pages.single-articles');
})->middleware('checkrole:admin')->name('admin.single-articles');


Route::get('/admin/published-articles', function () {
    return view('admin pages.published-articles');
})->middleware('checkrole:admin')->name('admin.published-articles');


Route::get('/admin/single-published-article', function () {
    return view('admin pages.single-published-article');
})->middleware('checkrole:admin')->name('admin.single-published-article');



Route::get('/admin/add-journalist', function () {
    return view('admin pages.add-journalist');
})->middleware('checkrole:admin')->name('admin.add-journalist');



Route::get('/admin/journalist-list', function () {
    return view('admin pages.journalist-list');
})->middleware('checkrole:admin')->name('admin.journalist-list');



// Journalist pages routes published-articles

Route::get('/journalist/add-articles', function () {
    return view('journalist pages.add-articles');
})->middleware('checkrole:journalist')->name('journalist.add-articles');


Route::get('/journalist/pending', function () {
    return view('journalist pages.pending');
})->middleware('checkrole:journalist')->name('journalist.pending');



Route::get('/journalist/published', function () {
    return view('journalist pages.published');
})->middleware('checkrole:journalist')->name('journalist.published');




Route::get('/journalist/full-pending-article', function () {
    return view('journalist pages.full-pending-article');
})->middleware('checkrole:journalist')->name('journalist.full-pending-article');


Route::get('/journalist/full-published-article', function () {
    return view('journalist pages.full-published-article');
})->middleware('checkrole:journalist')->name('journalist.full-published-article');



Route::get('/journalist/edit-article', function () {
    return view('journalist pages.edit-article');
})->middleware('checkrole:journalist')->name('journalist.edit-article');


// user pages routes
Route::get('/user/categories', function () {
    return view('user pages.categories');
})->middleware('checkrole:user')->name('user.categories');


Route::get('/user/contact', function () {
    return view('user pages.contact');
})->middleware('checkrole:user')->name('user.contact');
/* full-pending-article
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



Route::get('trial', function () {
    return view('trial');
});