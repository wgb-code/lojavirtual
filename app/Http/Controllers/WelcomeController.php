<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $types = Type::all();
        
        return view('welcome', compact('products', 'types'));
    }
}
