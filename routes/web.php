<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;

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

Route::get('/', [Controller::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
})->name('contact.public');

Route::get('/profil', [Controller::class, 'read']);

Route::get('/posts/create', [ContactController::class, 'create'])->name('posts.create');
Route::post('/posts', [ContactController::class, 'store'])->name('posts.store');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\Private\HomeController::class, 'index'])->name('home.index');
Route::get('/home/create', [\App\Http\Controllers\Private\HomeController::class, 'create'])->name('home.create');
Route::post('/home/create', [\App\Http\Controllers\Private\HomeController::class, 'store'])->name('home.store');
Route::get('/home/{home}/edit', [\App\Http\Controllers\Private\HomeController::class, 'edit'])->name('home.edit');
Route::put('/home/{home}/edit', [\App\Http\Controllers\Private\HomeController::class, 'update'])->name('home.update');
Route::delete('/home/{home}/delete', [\App\Http\Controllers\Private\HomeController::class, 'destroy'])->name('home.destroy');       

Route::get('/adminContact', 'ContactController@index')->name('contact');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/send-email', [Controller::class, 'sendEmail'])->name('send.email');


