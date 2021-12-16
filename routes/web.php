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
            "title" => "Title 1",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores eveniet a."
        ],
        [
            "image" => "https://picsum.photos/id/101/400",
            "title" => "Title 2",
            "description" => "Lorem ipsum dolor. Asperiores earum libero delectus dolores eveniet a."
        ],
        [
            "image" => "https://picsum.photos/id/1011/400",
            "title" => "Title 3",
            "description" => "Consectetur adipisicing elit. Asperiores earum libero delectus dolores eveniet a."
        ],
        [
            "image" => "https://picsum.photos/id/1070/400",
            "title" => "Title 4",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        [
            "image" => "https://picsum.photos/id/1082/400",
            "title" => "Title 5",
            "description" => "Asperiores earum libero delectus dolores eveniet a."
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