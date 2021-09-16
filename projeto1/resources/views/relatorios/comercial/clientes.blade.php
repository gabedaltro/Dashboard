@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

<div class="html-main">
  <div class="container" id="button-top">
      <div class="row">
          <div class="col">
              <a href="#" onclick="window.print()"><button type="button" aria-hidden="true" class="btn btn-light"><i class="fas fa-print" aria-hidden="true"></i></button> Imprimir</a>
          </div>
      </div>
      <div class="row">
          <div class="col" id="campo-de-pesquisa">
              <input type="search" placeholder="Pesquisar" aria-label="Pesquisar">
              <button type="submit">Pesquisar</button>
          </div>
      </div>
  </div>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Categoria</th>
              <th scope="col">Estoque</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Fita</td>
              <td>Cabo</td>
              <td>2</td>
              <td><a href="#" id="acoes"><i class="fas fa-pencil-alt"></i> </a><a href=""> <i class="far fa-trash-alt"></i></a></td>
            </tr>
          </tbody>
        </table>
  </div>
</div>

@endsection