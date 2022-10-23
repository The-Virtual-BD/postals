<?php

use App\Http\Controllers\GalaryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// // Register
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register'])->name('register');
// // Login
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login'])->name('login');
// // Logout
// Route::get('logout', function (){
//     Auth::logout();
//     return redirect('/login');
// })->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/mission', [HomeController::class, 'mission'])->name('mission');

Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/rates', [HomeController::class, 'rates'])->name('rates');
// Dummy route for login and register
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::resource('jobs', JobController::class);
Route::get('/jobsshow', [HomeController::class, 'jobsshow'])->name('jobsshow');

// Backoffice
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
Route::get('/pickup', [HomeController::class, 'pickup'])->name('pickup');
Route::get('/incomming', [HomeController::class, 'incomming'])->name('incomming');



Route::get('/profile', [HomeController::class, 'profile'])->name('profile');



Route::resource('galaries', GalaryController::class);
