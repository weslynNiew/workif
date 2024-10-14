<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from tb_produtos order by id desc limit 10
        $produtos = Produto::orderBy("id", "desc")->paginate(10);
        return view("produtos.index", compact("produtos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("produtos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dadosParaSalvar = $request->validate([
            'nome' => 'required|max:255',
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
            'quantidade' => 'required|numeric',
            'preco' => 'required|numeric',
        ]);
        $produto = Produto::create($dadosParaSalvar);
        return redirect()->route('produtos.index')->withSuccess(__('Produto criado com sucesso'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view("produtos.show", compact("produto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view("produtos.edit", compact("produto"));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $storeData = $request->validate([
            'nome' => 'required|max:255',
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
            'quantidade' => 'required|numeric',
            'preco' => 'required|numeric',
            
        ]);
        Produto::whereId($id)->update($storeData);
        
        return redirect()->route('produtos.index')->withSuccess(__('Produto atualizado com sucesso'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect('/produtos')->with('completed', 'Produto removido com sucesso');
    }
}
