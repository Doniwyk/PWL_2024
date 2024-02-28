<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
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
// BASIC ROUTING
Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/about', function () {
    return 'Doni Wahyu Kurniawan <br> 2241720015';
});

// ROUTE PARAMETER
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});

// Route::get('/article/{id}', function ($id) { 
//     return 'Artikel dengan id- '.$id; 
// });

// OPTIONAL PARAMETER
Route::get('/user/{name?}', function ($name=null) { 
    return 'Nama saya '.$name; 
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
});

// MEMBUAT CONTROLLER
Route::get('/hello', [WelcomeController::class, 'hello']);

// MODIFIKASI F
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// MODIFIKASI G
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// RESOURCE CONTROLLER
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
