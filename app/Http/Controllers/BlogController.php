<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_published', true)
                    ->orderBy('published_at', 'desc')
                    ->get();
        
        return view('blog', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        if (!$blog->is_published) {
            abort(404);
        }
        
        return view('blog-detail', compact('blog'));
    }
}