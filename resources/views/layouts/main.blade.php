<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/estilo.css">
       
        <!-- Font da Aplicação -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- Bootstrap da Aplicação -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- Scripts da Aplicação -->
        <script href="/js/scripts.js"></script>
    </head>
    <body class="corpo-geral">
        <header class="cabecalho-aplicacao">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="/images/icon/principal.png">&nbsp;AGM Solutions</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/manual">Manuais<span class="sr-only">(current)</span></a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/provas">Avaliações</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        + Ferramentas
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/tms">Lista de TMS</a>
                        <a class="dropdown-item" href="/ramais">Ramais</a>
                        <a class="dropdown-item" href="#">Resultados Consolidados</a>
                        <a class="dropdown-item" href="#">Mural de Recados</a>
                        <a class="dropdown-item" href="/acesso">Acessar ADM</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
        </header>
        @yield('content')
        
      
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>
