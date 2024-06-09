<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type; // Adicione este import
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create()
    {
        $types = Type::all();
        return view('products.create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|min:2|max:30',
            'description' => 'max:200',
            'price'       => 'required|numeric|gt:0',
            'quantity'    => 'required|numeric',
            'type_id'     => 'required|exists:types,id' // Validação adicional para type_id
        ]);

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

    public function edit($id)
    {
        $product = Product::find($id);
        $types = Type::all(); // Pegue os tipos aqui também, se necessário para a edição

        return view('products.edit', ['product' => $product, 'types' => $types]);
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'type_id' => $request->type_id
        ]);

        return redirect('/products')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'Produto excluído com sucesso!');
    }
}