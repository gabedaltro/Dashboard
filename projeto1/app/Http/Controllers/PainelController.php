<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

use App\Models\Painel;

class PainelController extends Controller
{
    public function action() {
        return [
            "codigo_produto" => "Codigo",
            "descricao" => "Nome",
            "preco1" => 2,
            "preco2" => 3,
            "preco3" => 4,
            "grupo" => null,
            "subgrupo" => null
        ];
    }

    public function logout(Request $request) {

        Auth::logout();
        
        return redirect('/login');
    
    }
    public function index() {

        $painels = Painel::all();

        return view('painel.controle', compact('painels'));
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
