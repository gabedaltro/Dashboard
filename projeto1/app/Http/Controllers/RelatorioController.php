<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Painel;

class RelatorioController extends Controller
{
    public function clientes() {

        $painels = Painel::all();

        return view('relatorios.comercial.clientes', ['painels' => $painels]);

    }

    public function produtos() {

        $painels = Painel::all();

        return view('relatorios.comercial.produtos', ['painels' => $painels]);

    }
}
