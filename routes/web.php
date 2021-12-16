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
    $posts = [
        [
            "image" => "https://picsum.photos/id/1025/400",
            "title" => "Title 1"
        ],
        [
            "image" => "https://picsum.photos/id/101/400",
            "title" => "Title 2"
        ],
        [
            "image" => "https://picsum.photos/id/1011/400",
            "title" => "Title 3"
        ]
    ];
    return view('home', compact('posts'));
})->name('home');   

Route::get('/blog', function () {
    return view('blog');
})->name('blog');    

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/about', function () {
    return view('about');
})->name('about');