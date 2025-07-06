<?php

use App\Http\Controllers\SiteOne\SiteOneController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isEmpty;

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
/*
Route::get('/Test', function () {
    return 'test';
});
*/
/*
Route::get('/task_one', function () {
    return view('task_one');
});
*/
/*
Route::view('/task', 'task_one');
*/
/*
Route::get('/user/profile/{id}', function ($id) {
    echo 'user id : ' . $id;
});
*/
/*
Route::get('/news/{id?}', function ($id = null) {
    $news = [1, 2, 3, 4, 5, 6];
    if ($id) {
        echo $id;
    } else {
        foreach ($news as $new) {
            echo $new . '<br>';
        }
    }
});
*/
// site1 : Home, About, Contact
/* Long Annoying Code
Route::prefix('site1/ecom')->group(function () {
    Route::get('/home', function () {
        echo '<h1>Home</h1>';
        echo '<h1>Home</h1>';
        echo '<h1>Home</h1>';
        echo '<h1>Home</h1>';
        echo '<h1>Home</h1>';
        echo '<h1>Home</h1>';
    });

    Route::get('/about', function () {
        echo '<h1>About</h1>';
        echo '<h1>About</h1>';
        echo '<h1>About</h1>';
        echo '<h1>About</h1>';
        echo '<h1>About</h1>';
        echo '<h1>About</h1>';
    });

    Route::get('/contact', function () {
        echo '<h1>Contact</h1>';
        echo '<h1>Contact</h1>';
        echo '<h1>Contact</h1>';
        echo '<h1>Contact</h1>';
        echo '<h1>Contact</h1>';
        echo '<h1>Contact</h1>';
    });
});
*/
/*
Route::prefix('site1/ecom')->group(function () {
    Route::get('/home', [SiteOneController::class, 'home']);
    Route::get('/about', [SiteOneController::class, 'about']);
    Route::get('/contact', [SiteOneController::class, 'contact']);
    Route::get('/msg/{id}', [SiteOneController::class, 'msg']);
});
*/
Route::prefix('site1/ecom')->controller(SiteOneController::class)->group(
    function () {
        Route::get('/home', 'home');
        Route::get('/about', 'about');
        Route::get('/contact', 'contact');
        Route::get('/msg/{id}', 'msg');
    }
);
