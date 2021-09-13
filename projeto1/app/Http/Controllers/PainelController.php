<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Painel;

class PainelController extends Controller
{
    public function index() {

        $painels = Painel::all();

        return view('painel.controle', ['painels' => $painels]);
    }

    public function create() {

        $painels = Painel::all();

        return view('painel.controle', ['painels' => $painels]);
    }

    public function edit($id) {

        $painels = Painel::findOrFail($id);

        return view('painel.controle', ['painels' => $painels]);

    }

    public function update(Request $request) {

        $data = $request->all();

        Painel::findOrFail($request->id)->update($data);

        return redirect ('/painel-de-controle')->with('msg', 'URL atualizada com sucesso!');
    }
}
