<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from tb_produtos order by id desc limit 10
        $users = User::orderBy("id", "desc")->paginate(10);
        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:3',
            'siape' => 'required|max:50',
            'carga_horaria_semanal' => 'required|numeric',
            'funcao' => 'required|max:100',
            'cargo_efetivo' => 'required|max:100',
        ]);

        $user = User::create(array_merge($request->all(), ['role' => 'ROLE_USER']));

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("users.show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view("users.edit", compact("user"));
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
            'nome' => 'required|min:3',
            'email' => 'required|min:3',
            'siape' => 'required|max:50',
            'carga_horaria_semanal' => 'required|numeric',
            'funcao' => 'required|max:100',
            'cargo_efetivo' => 'required|max:100',
        ]);
        User::whereId($id)->update($storeData);

        return redirect()->route('users.index')->withSuccess(__('Usuário atualizado com sucesso'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users')->with('completed', 'Usuario removido com sucesso');
    }
}
