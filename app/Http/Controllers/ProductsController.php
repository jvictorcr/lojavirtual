<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index', ['products' => Product::all()]);
    }
    
    public function create()
    {
        return view('products.create', [
            'types' => Type::all(),
            'destaqueOptions' => ['0' => 'Não', '1' => 'Sim'], // Opções para destaque
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:20',
            'description' => 'max:200',
            'price' => 'required|numeric|gt:0',
            'quantity' => 'required|numeric',
            'destaque' => 'required|boolean', // Verifique se a validação está definida para booleano
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'type_id' => $request->type_id,
            'destaque' => $request->destaque, // Salva o campo destaque no banco de dados
        ]);

        return redirect('/products')->with('success', 'Produto salvo com sucesso!');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', [
            'product' => $product,
            'types' => Type::all(),
            'destaqueOptions' => ['0' => 'Não', '1' => 'Sim'], // Opções para destaque
        ]);
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $request->validate([
            'name' => 'required|min:2|max:20',
            'description' => 'max:200',
            'price' => 'required|numeric|gt:0',
            'quantity' => 'required|numeric',
            'destaque' => 'required|boolean', // Verifique se a validação está definida para booleano
        ]);
        

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'type_id' => $request->type_id,
            'destaque' => $request->destaque, // Atualiza o campo destaque
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
