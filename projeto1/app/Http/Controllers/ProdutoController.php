<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Painel;

class ProdutoController extends Controller
{
    public function index() {

        $painels = Painel::all();

        return view('dashboard',['painels' => $painels]);
    }
    
    public function produto() {

        $painels = Painel::all();

        return view('cadastro.produto', ['painels' => $painels]);
    }

    public function store(Request $request) {
        
        $painels = new Painel;

        $painels->url_api = $request->url_api;

        $painels->save();

        return redirect('/')->with('msg', 'URL criada com sucesso!');

    }
}
