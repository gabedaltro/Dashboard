<!DOCTYPE html>
<html lang="pt-BR"><!-- {{ str_replace('_', '-', app()->getLocale()) }} -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <!-- Fonte do Google -->

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/index.css">
        <link rel="stylesheet" href="/css/styles.css">
    </head>
@auth
    <body>
        <nav class="navbar" id="navbar-top">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-dark">
                    <i class="fas fa-align-justify"></i>
                    <span></span>
                </button>
                <div id="navbar-bottom">
                    @if (session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif  
                </div>
                    <form action="/logout" method="POST">
                        @csrf
                        <a id="profile" class="dropdown-item" href="/logout"
                            class="nav-link" 
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="fas fa-power-off"></i>
                        </a>
                    </form>
            </div>

        </nav>
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <ul class="list-unstyled components">
                    <a href="/"><p><i class="fas fa-home"></i> Dashboard</p></a>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-cash-register"></i> Cadastro</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="/cadastrar/produto">Produto</a>
                            </li>
                            <li>
                                <a href="#">Cliente</a>
                            </li>
                        </ul>
                        <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-paste"></i> Relatórios</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu3">
                            <li>
                                <a href="#SubMenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Comercial</a>
                                <ul class="collapse list-unstyled" id="SubMenu1">
                                    <li>
                                        <a href="/relatorios/comercial/clientes" class="ms-1">Clientes</a>
                                    </li>
                                    <li>
                                        <a href="/relatorios/comercial/produtos" class="ms-1">Produtos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#SubMenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Vendas</a>
                                <ul class="collapse list-unstyled" id="SubMenu2">
                                    <li>
                                        <a href="#" class="ms-1">Resumo de Vendas</a>
                                    </li>
                                    <li>
                                        <a href="#" class="ms-1">Relação de Vendas</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Fiscal</a>
                            </li>
                            <li>
                                <a href="#">Financeiro</a>
                            </li>
                        </ul>
                        <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-cog"></i> Configurações</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu2">
                            <li>
                                @if ($painels->isEmpty())
                                    <a href="/painel-de-controle/create">Painel de Controle</a>
                                @else
                                    <a href="/painel-de-controle/edit/{id}">Painel de Controle</a>
                                @endif
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
    
            <!-- Page Content  -->
            <div id="content">
                @yield('content')
            </div>
        </div>



        <!-- JS do bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/378d05ea8c.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- JS ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!-- JS da aplicação -->
        <script src="/js/scripts.js"></script>
    </body>
@endauth
</html>