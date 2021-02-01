<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Admin/Dashboard', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('dashboard');

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
 */
Route::get('/contact',function(){
    return Inertia::render('Admin/Contact');
})->name('contact');

//NB: que j'ai ajouter l'attribut $namespace dans RouteServiceProvider
Route::resource('user','UserController');

Route::get('/profile','UserController@profile')->name('user.profile');
Route::put('/profile','UserController@updateProfile')->name('user.profile');