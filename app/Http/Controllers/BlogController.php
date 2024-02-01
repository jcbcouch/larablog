<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index() {
        return view('index', [
            'blogs' => Blog::latest()->paginate(6)
        ]);
    }

    public function show(Blog $blog) {
        return view('show', [
            'blog' => $blog
        ]);
    }

    public function showByUser(User $user) {
        $blogs = Blog::where('user_id', $user->id)->paginate(6);
        // dd($blogs);
        return view('index', [
            'blogs' => $blogs
        ]);
    }


    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $formFields['user_id'] = auth()->id();

        Blog::create($formFields);

        return redirect('/')->with('message', 'Post created successfully!');
    }


}