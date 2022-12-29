@extends('layouts.main')

@section('title', 'Manuais de Treinamento')




@section('content')

    <div class="container-esquerda">
        <h2 class="tt-manuais"> Manuais Krona </h2>
    
        <a href="/docs/teste.pdf" target="janela">manual de teste</a>
    </div>
    
    <div class="container-direita" id="container-direita">
        <iframe id="janela" name="janela">

        </iframe>
    
    </div>



@endsection
