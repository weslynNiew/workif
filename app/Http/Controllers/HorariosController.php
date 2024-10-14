<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\User;
use Illuminate\Http\Request;

class HorariosController extends Controller
{

    public function index($user)
    {
        $user = User::find($user);
        return view('carga_horaria.index')
            ->with('user', $user)
            ->with('horarios', Horario::where('user_id', $user->id)->get());
    }

    public function criarHorarios($user)
    {
        $horarios = [];

        for ($dia = 1; $dia <= 7; $dia++) {
            $horarios[] = [
                'dia' => $dia,
                'user_id' => $user,
            ];
        }

        Horario::insert($horarios);

        return redirect()->route('horarios.index', $user);
    }

    public function edit(Horario $horario)
    {
        return view('carga_horaria.editar')
            ->with('horario', $horario);
    }

    public function update(Request $request)
    {
        $horario = Horario::find($request->horario);
        $horario->fill($request->all());
        $horario->save();

        return redirect()->route('horarios.index',$horario->user->id)->with('success', 'O horário foi editado com sucesso!');
    }

}
