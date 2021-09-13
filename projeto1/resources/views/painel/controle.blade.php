@extends('layouts.main')

@section('title', 'API Host')

@section('content')

@if ($painels->isEmpty())

    <form action="/" method="POST">
        @csrf
        <div class="main-painel">
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Criar</button>
            <div class="painel-top">
                <h2>Painel de Controle</h2>
                <p>Configurações do Sistema</p>
            </div>
            <div class="form-group">
                <small id="emailHelp" class="form-text text-muted">API Host</small>
                <div class="display-flex">
                    <form action="/" method="POST">
                            @csrf
                            @method('POST')
                            <input type="url" class="form-control" id="url_api" name="url_api" placeholder="http://example.com" pattern="http://.*" required>
                    </form>
                </div>
            </div>
        </div>
    </form>

@else
@foreach ($painels as $painel)
    
    <form action="/painel-de-controle/update/{{ $painel->id }}" method="POST">
        @csrf
        <div class="main-painel">
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Salvar</button>
            <div class="painel-top">
                <h2>Painel de Controle</h2>
                <p>Configurações do Sistema</p>
            </div>
            <div class="form-group">
                <small id="emailHelp" class="form-text text-muted">API Host</small>
                <div class="display-flex">
                    @foreach ($painels as $painel)
                        <form action="/painel-de-controle/update/{{ $painel->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="url" class="form-control" id="url_api" name="url_api" placeholder="http://example.com" value="{{ $painel->url_api }}" pattern="http://.*" required>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </form>
@endforeach

@endif

@endsection

