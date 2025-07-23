<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // ✅ Required for extending Controller

class PostController extends Controller
{
    // Show create post form
    public function create()
    {
        return view('frontend.posts.create');
    }

    public function index()
{
    $posts = Post::latest()->paginate(10);
    return view('frontend.posts.index', compact('posts'));
}
    // Store post data
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Post created successfully!');
    }
}
