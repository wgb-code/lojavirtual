<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create([
            'name'        => $request->name,
            'description' => $request->description,
            'quantity'    => $request->quantity,
            'price'       => $request->price,
            'type_id'     => $request->type_id
        ]);
        return redirect('/products');
    }

    public function index()
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }
}
