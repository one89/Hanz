<?php
// filepath: app/Http/Controllers/BlogController.php


namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();
        return view('pages.blog', compact('posts'));
    }
}