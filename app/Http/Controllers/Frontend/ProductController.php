<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('Frontend.product', compact('categories'));  // Show list of products
    }
    public function getProducts()
    {
        $products = DB::table('products')->get();
        return view('Frontend.listing', compact('products'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'discount' => 'nullable|integer',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        // Get category_id from name (if you stored name in form)
        $category = DB::table('categories')->where('name', $request->category)->first();

        DB::table('products')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'category' => $category ? $category->name : null,
            'image' => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('products.listing')->with('success', 'Product added successfully!');
    }
}
