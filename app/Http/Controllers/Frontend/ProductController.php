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
        return view('Frontend.product', compact('categories'));  // Show product form or list
    }

    public function getProducts()
    {
        // ✅ Use pagination instead of get()
        $products = DB::table('products')->paginate(10);  // 10 items per page
        return view('Frontend.listing', compact('products'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'discount' => 'nullable|integer',
        'category' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // dd($request->all());

    $product = DB::table('products')->where('id', $id)->first();

    $imagePath = $product->image;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
    }

    DB::table('products')->where('id', $id)->update([
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price,
        'discount' => $request->discount,
        'category' => $request->category,
        'image' => $imagePath,
        'updated_at' => now(),
    ]);

    return redirect()->route('products.listing')->with('success', 'Product updated successfully.');
}


     public function edit($id)
{
    $product = DB::table('products')->where('id', $id)->first();
    $categories = DB::table('categories')->get();

    if (!$product) {
        return redirect()->route('products.listing')->with('error', 'Product not found.');
    }

    return view('Frontend.edit', compact('product', 'categories'));
}

public function destroy($id)
{
    $product = DB::table('products')->where('id', $id)->first();

    if (!$product) {
        return redirect()->route('products.listing')->with('error', 'Product not found.');
    }

    // Optionally delete the image from storage
    if ($product->image && \Storage::disk('public')->exists($product->image)) {
        \Storage::disk('public')->delete($product->image);
    }

    DB::table('products')->where('id', $id)->delete();

    return redirect()->route('products.listing')->with('success', 'Product deleted successfully!');
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

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        // Find the selected category by name
        $category = DB::table('categories')->where('name', $request->category)->first();

        // Insert new product
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
