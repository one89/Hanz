<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
});



Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');



Route::post('/contact', function (Request $request) {
    // You can add validation and mail logic here if needed
    // For now, just redirect back with a success message
    return back()->with('success', 'Your message has been sent!');
})->name('contact.send');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog.index');
// ...existing code...

// Courses list page
Route::get('/courses', function () {
    return view('pages.courses');
})->name('courses');
// Course details page

Route::get('/courses/details/{id}', function ($id) {
    return view('pages.courses-details', compact('id'));
})->name('courses.details');
// ...existing code...

Route::get('/instructors', function () {
    return view('pages.instructors');
})->name('instructors');
// ...existing code...