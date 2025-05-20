<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/blog', function () {
    return view('pages.blog');
});


Route::get('/blog', function () {
    $posts = BlogPost::orderBy('date', 'desc')->paginate(5);
    return view('pages.blog', compact('posts'));
});

Route::get('/blog/{slug}', function ($slug) {
    $post = BlogPost::where('slug', $slug)->firstOrFail();
    return view('pages.blog-post', compact('post'));
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');