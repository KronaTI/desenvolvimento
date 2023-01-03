@extends('layouts.main')

@section('title', 'Página Principal')



@section('content')

    <div id="painel-esquerda">
        <h2 class="titulo-ferramentas">Ferramentas ADM</h2>

        <a href="/adm-geral/cadastro-ramais" target="janela">Cadastro de Ramais</a>

    </div>
    <div id="painel-direita">
        <iframe id="janela" name="janela">

        </iframe>
    </div>


@endsection
