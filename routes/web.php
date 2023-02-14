<?php

use Illuminate\Support\Facades\Route;

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
    // return view('welcome');

    return "Hello, rpu6oeg!";
});

Route::get('/users',function() {
    return "Это ваша страничка!";
});

Route::get('/users/{id}',function($id) {
    return "Это ваша страничка! #" . $id;
});

Route::get('/books',function() {
    return "All books";
});

Route::get('/books/1',function() {
    return "Ты";
});

Route::get('/books/2',function() {
    return "Прекрасен";
});

Route::get('/books/3',function() {
    return "СКОТИНА!";
});
