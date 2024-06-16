<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    // Exibe uma lista de todos os tipos
    public function index() {
        return view('types.index', ['types' => Type::all()]);
    }

    // Abre o formulário vazio para um novo tipo
    public function create() {
        return view('types.create');
    }

    // Função chamada no submit do form.. será um POST com os dados
    public function store(Request $request)
    {
        // Valida os dados do request
        $request->validate([
            'name' => 'required|min:2|max:20',
        ]);

        // Cria um novo tipo com os dados validados
        Type::create([
            'name' => $request->name,
        ]);

        return redirect('/type')->with('success', 'Tipo salvo com sucesso!');
    }

    // Exibe o formulário de edição com os dados do tipo especificado
    public function edit($id) {
        $type = Type::find($id);
        return view('types.edit', ['type' => $type]);
    }

    // Atualiza os dados do tipo especificado
    public function update(Request $request) {
        $type = Type::find($request->id);

        // Valida os dados do request
        $request->validate([
            'name' => 'required|min:2|max:20',
        ]);

        // Atualiza o tipo com os dados validados
        $type->update([
            'name' => $request->name,
        ]);

        return redirect('/type')->with('success', 'Tipo atualizado com sucesso!');
    }

    // Exclui o tipo especificado
    public function destroy($id)
    {  
        $type = Type::find($id);
        $type->delete();
        return redirect('/type')->with('success', 'Tipo excluído com sucesso!');
    }
}
