<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index()
    {
        return view('Frontend.categories');  // Show list of products
    }
    //
}
