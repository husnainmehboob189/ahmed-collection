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

}
