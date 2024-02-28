<?php

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

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/about', function () {
    return 'Doni Wahyu Kurniawan <br> 2241720015';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});

Route::get('/article/{id}', function ($id) { 
    return 'Artikel dengan id- '.$id; 
});

Route::get('/user/{name?}', function ($name=null) { 
    return 'Nama saya '.$name; 
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
});
