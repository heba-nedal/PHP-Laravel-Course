<?php

use App\Http\Controllers\SiteOne\SiteOneController;
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



Route::prefix('site1')->name('site1.')->controller(SiteOneController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/services', 'services')->name('services');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/postcontact', 'postcontact')->name('postcontact');
    Route::get('/ok', 'ok')->name('ok');
    Route::get('/viewcontact', 'viewContact')->name('viewcontact');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
});
