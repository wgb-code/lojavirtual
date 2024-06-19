<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypesController extends Controller
{
    public function create()
    {
        $types = Type::all();
        return view('types.create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:30',
        ]);

        Type::create([
            'name' => $request->name,
        ]);

        return redirect('/types');
    }

    public function index()
    {
        return view('types.index', [
            'types' => Type::all()
        ]);
    }

    public function edit($id)
    {
        $type = Type::find($id);

        return view('types.edit', ['type' => $type]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2|max:30',
        ]);

        $type = Type::find($id);

        if (!$type) {
            return redirect('/types')->with('error', 'Categoria não encontrada.');
        }

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
