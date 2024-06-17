<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypesController extends Controller
{
    public function create()
    {
        $type = Type::all();
        return view('types.create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|min:2|max:30',
        ]);

        Type::create([
            'name'        => $request->name,
        ]);
        
        return redirect('/types');
    }

    public function index()
    {
        return view('types.index', [
            'type' => Type::all()
        ]);
    }

    public function edit($id)
    {
        $type = Type::find($id);

        return view('type.edit', ['type' => $type]);
    }

    public function update(Request $request)
    {
        $type = Type::find($request->id);

        $type->update([
            'name' => $request->name,
        ]);

        return redirect('/types')->with('success', 'Categoria atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect('/types')->with('success', 'Categoria excluída com sucesso.');
    }

}
